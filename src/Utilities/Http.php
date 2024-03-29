<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Utilities;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Response;
use JeffreyKroonen\BolRetailer\Exceptions\BadRequestException;
use JeffreyKroonen\BolRetailer\Exceptions\NotFoundException;
use JeffreyKroonen\BolRetailer\Exceptions\RateLimitException;
use JeffreyKroonen\BolRetailer\Exceptions\ResponseException;
use JeffreyKroonen\BolRetailer\Exceptions\ServerException;
use JeffreyKroonen\BolRetailer\Exceptions\UnauthorizedException;
use JeffreyKroonen\BolRetailer\Utilities\Response as UtilitiesResponse;
use Psr\Http\Message\ResponseInterface;

class Http
{
    public const  HEADER_APPLICATION_CONTENT_TYPE_JSON = 'application/vnd.retailer.v8+json';

    /**
     * @var HttpClient
     */
    protected HttpClient $httpClient;

    /**
     * @var ?array $headers
     */
    private ?array $headers = [];

    /**
     * @var ?array $query
     */
    private ?array $query = [];

    /**
     * @var ?array $body
     */
    private ?array $body = [];

    /**
     * @var Response $response
     */
    private ResponseInterface $response;

    public function __construct()
    {
        $this->setHttpClient(new HttpClient());
    }

    /**
     * Mutator for the httpClient property.
     *
     * @param HttpClient $httpClient The Guzzle HTTP client used for API calls.
     * @return self
     */
    public function setHttpClient(HttpClient $httpClient): self
    {
        $this->httpClient = $httpClient;

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
     * UThe accessor for the headers property.
     *
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
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
     * UThe accessor for the body property.
     *
     * @return array
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * Mutator for the body property.
     *
     * @param array $body
     * @return self
     */
    public function setBody(array $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getResponse(): ?UtilitiesResponse
    {
        if (! isset($this->response)) {
            return null;
        }

        return (new UtilitiesResponse())->setPsrResponse($this->response);
    }

    /**
     * Make a HTTP GET request.
     *
     * @param string $url
     * @param array $query
     * @return Response
     * @throws BadRequestException The request is incorrect formatted.
     * @throws UnauthorizedException The incoming request is unauthorized.
     * @throws RateLimitException The rate limit is exceeded.
     * @throws ServerException The server can't handle the incoming request.
     * @throws NotFoundException The server can't find the given URL.
     * @throws ResponseException Something wen't wrong in the response.
     */
    public function get(string $url, $query = []): Response
    {
        try {
            $this->response = $this->httpClient->get($url, [
                'headers' => $this->headers,
                'query' => ! empty($query) ? $query : $this->query,
            ]);
        } catch (BadResponseException $badResponseException) {
            $this->handleBadResponseException($badResponseException);
        }

        return $this->response;
    }

    /**
     * Make a HTTP POST request.
     *
     * @param string $url
     * @param array $body
     * @return Response
     * @throws BadRequestException The request is incorrect formatted.
     * @throws UnauthorizedException The incoming request is unauthorized.
     * @throws RateLimitException The rate limit is exceeded.
     * @throws ServerException The server can't handle the incoming request.
     * @throws NotFoundException The server can't find the given URL.
     * @throws ResponseException Something wen't wrong in the response.
     */
    public function post(string $url, $body = [], $query = []): Response
    {
        try {
            $this->response = $this->httpClient->post($url, [
                'headers' => $this->headers,
                'query' => ! empty($query) ? $query : $this->query,
                'json' => ! empty($body) ? $body : $this->body,
            ]);
        } catch (BadResponseException $badResponseException) {
            $this->handleBadResponseException($badResponseException);
        }

        return $this->response;
    }

    /**
     * Make a HTTP DELETE request.
     *
     * @param string $url
     * @param array $body
     * @return Response
     * @throws BadRequestException The request is incorrect formatted.
     * @throws UnauthorizedException The incoming request is unauthorized.
     * @throws RateLimitException The rate limit is exceeded.
     * @throws ServerException The server can't handle the incoming request.
     * @throws NotFoundException The server can't find the given URL.
     * @throws ResponseException Something wen't wrong in the response.
     */
    public function delete(string $url, $query = []): Response
    {
        try {
            $this->response = $this->httpClient->delete($url, [
                'headers' => $this->headers,
                'query' => ! empty($query) ? $query : $this->query,
            ]);
        } catch (BadResponseException $badResponseException) {
            $this->handleBadResponseException($badResponseException);
        }

        return $this->response;
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
     * @return void
     * @param BadResponseException $badResponseException
     * @throws BadRequestException The request is incorrect formatted.
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

        if ($statusCode === 400) {
            throw new BadRequestException($message, $statusCode);
        } elseif (in_array($statusCode, [401, 403])) {
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
