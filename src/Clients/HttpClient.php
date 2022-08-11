<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Clients;

use Clients\ServerException;
use Exceptions\NotFoundException;
use Exceptions\RateLimitException;
use Exceptions\UnauthorizedException;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Response;
use JeffreyKroonen\BolRetailer\Exceptions\ResponseException;
use Psr\Http\Message\ResponseInterface;

class HttpClient
{
    /**
     * @var HttpClient
     */
    protected GuzzleHttpClient $guzzleHttpClient;

    /**
     * @var ?array $headers
     */
    private ?array $headers = [];

    /**
     * @var ?array $query
     */
    private ?array $query = [];

    public function __construct()
    {
        $this->setGuzzleHttpClient(new GuzzleHttpClient());
    }

    /**
     * Mutator for the httpClient property.
     *
     * @param GuzzleHttpClient $guzzleHttpClient The Guzzle HTTP client used for API calls.
     * @return self
     */
    public function setGuzzleHttpClient(GuzzleHttpClient $guzzleHttpClient): self
    {
        $this->guzzleHttpClient = $guzzleHttpClient;

        return $this;
    }

    /**
     * Mutator for the headers property.
     *
     * @param array $headers
     * @return self
     */
    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * Mutator for the query property.
     *
     * @param array $query
     * @return self
     */
    public function setQuery(array $query): self
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Make a HTTP POST request.
     *
     * @param string $url
     * @param array $body
     * @return Response
     * @throws UnauthorizedException The incoming request is unauthorized.
     * @throws RateLimitException The rate limit is exceeded.
     * @throws ServerException The server can't handle the incoming request.
     * @throws NotFoundException The server can't find the given URL.
     * @throws ResponseException Something wen't wrong in the response.
     */
    public function post(string $url, $body = []): Response
    {
        try {
            $response = $this->guzzleHttpClient->post($url, [
                'headers' => $this->headers,
                'query' => $this->query,
            ]);
        } catch (BadResponseException $badResponseException) {
            $this->handleBadResponseException($badResponseException);
        }

        return $response;
    }

    public function jsonDecodeBody(?ResponseInterface $response): array
    {
        if (is_null($response)) {
            throw new ResponseException('No body received.');
        }

        $data = json_decode((string) $response->getBody(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new ResponseException('Body contains invalid JSON.');
        }

        return $data;
    }

    /**
     * Handle the bad response from the Guzzle HTTP client.
     *
     * @param BadResponseException $badResponseException
     * @return void
     * @throws UnauthorizedException The incoming request is unauthorized.
     * @throws RateLimitException The rate limit is exceeded.
     * @throws ServerException The server can't handle the incoming request.
     * @throws NotFoundException The server can't find the given URL.
     * @throws ResponseException Something wen't wrong in the response.
     */
    private function handleBadResponseException(BadResponseException $badResponseException): void
    {
        $response = $badResponseException->getResponse();

        $data = [];
        try {
            $data = $this->jsonDecodeBody($response);
        } catch (ResponseException $responseException) {
            //
        }

        $statusCode = $response->getStatusCode();

        $message = $data['detail'] ??
            $data['error_description'] ??
            $statusCode . ' ' . $response->getReasonPhrase();

        if ($statusCode === 401) {
            throw new UnauthorizedException($message, $statusCode);
        } if ($statusCode === 429) {
            throw new RateLimitException($message, $statusCode);
        } elseif (in_array($statusCode, [500, 502, 503, 504, 507])) {
            throw new ServerException($message, $statusCode);
        } elseif ($statusCode === 404) {
            throw new NotFoundException($message, $statusCode);
        } else {
            throw new ResponseException($message, $statusCode);
        }
    }
}
