<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Utilities;

use JeffreyKroonen\BolRetailer\Interfaces\ResponseInterface;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class Response implements ResponseInterface
{
    protected HttpResponseInterface $response;

    public function header(?string $header = null): ?string
    {
        if (is_null($header)) {
            return $this->headers();
        }

        return $this->response->hasHeader($header) ? $this->response->getHeader($header)[0] : null;
    }

    public function headers(): array
    {
        $headers = [];
        foreach ($this->response->getHeaders() as $name => $value) {
            $headers[$name] = implode(', ', $value);
        }

        return $headers;
     }

    public function json(): array
    {
        $data = json_decode((string) $this->response->getBody(), true);
        if (json_last_error() === JSON_ERROR_NONE) {
            return $data;
        }

        return [];
    }

    public function statusCode(): int
    {
        return $this->response->getStatusCode();
    }
}
