<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Clients;

use JeffreyKroonen\BolRetailer\Enums\HeaderAuthorizationTypes;
use JeffreyKroonen\BolRetailer\Enums\HeaderGrantTypes;
use JeffreyKroonen\BolRetailer\Enums\ScopeTypes;
use JeffreyKroonen\BolRetailer\Exceptions\ResponseException;
use Psr\Http\Message\ResponseInterface;

class AuthClient extends BaseClient
{
    private const AUTH_URL = 'https://login.bol.com/token';

    /**
     * @var string
     */
    private string $bolClientId;

    /**
     * @var string
     */
    private string $bolClientSecret;

    /**
     * @var string
     */
    private string $accessToken;

    /**
     * The number of seconds when we have to get a new access token.
     *
     * @var integer
     */
    private int $expiresIn;

    /**
     * Create a new AuthClient instance.
     *
     * @param string|null $bolClientId
     * @param string|null $bolClientSecret
     */
    public function __construct(?string $bolClientId = null, ?string $bolClientSecret = null)
    {
        parent::__construct();

        if (!is_null($bolClientId)) {
            $this->setBolClientId($bolClientId);
        }

        if (!is_null($bolClientId)) {
            $this->setBolClientSecret($bolClientSecret);
        }
    }

    /**
     * Mutator for the bolClientId property.
     *
     * @param string $bolClientId
     * @return self
     */
    public function setBolClientId(string $bolClientId): self
    {
        $this->bolClientId = $bolClientId;

        return $this;
    }

    /**
     * Mutator for the bolClientSecret property.
     *
     * @param string $bolClientId
     * @return self
     */
    public function setBolClientSecret(string $bolClientSecret): self
    {
        $this->bolClientSecret = $bolClientSecret;

        return $this;
    }

    public function authenticate(): self
    {
        // @todo Make a HTTP POST request to authenticate at Bol.com.
        $credentials = base64_encode("$this->bolClientId:$this->bolClientSecret");
        $response = $this->httpClient->post(self::AUTH_URL, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => sprintf('%s %s', HeaderAuthorizationTypes::BASIC->value, $credentials),
            ],
            'query' => [
                'grant_type' => HeaderGrantTypes::CLIENT_CREDENTIALS->value,
            ],
        ]);

        $validated = $this->validateResponse($response);

        $this->accessToken = $validated['access_token'];
        $this->expiresIn = time() + $validated['expires_in'];

        return $this;
    }

    private function validateResponse($response): array
    {
        $responseBody = $this->jsonDecodeBody($response);

        // Validate the required response body fields.
        if (empty($responseBody['access_token'])) {
            throw new ResponseException('Response body is missing [access_token] field.');
        }
        if (empty($responseBody['token_type'])) {
            throw new ResponseException('Response body is missing [token_type] field.');
        }
        if (empty($responseBody['expires_in'])) {
            throw new ResponseException('Response body is missing [expires_in] field.');
        }
        if (empty($responseBody['scope'])) {
            throw new ResponseException('Response body is missing [scope] field.');
        }

        // Validate token_type.
        if ($responseBody['token_type'] !== HeaderAuthorizationTypes::BEARER->value) {
            throw new ResponseException(
                sprintf('The field [token_type] has a value of \'%s\', expected \'%s\'.', $responseBody['token_type'], HeaderAuthorizationTypes::BEARER->value)
            );
        }

        // Validate scope
        if (strtolower($responseBody['scope']) !== ScopeTypes::RETAILER->value) {
            throw new ResponseException(
                sprintf('The field [scope] has a value of \'%s\', expected \'%s\'.', $responseBody['scope'], ScopeTypes::RETAILER->value)
            );
        }

        // Validate expires_in.
        if (!is_int($responseBody['expires_in'])) {
            throw new ResponseException('The field [expires_in] is not an integer.');
        }

        return $responseBody;
    }

    private function jsonDecodeBody(?ResponseInterface $response): array
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
}
