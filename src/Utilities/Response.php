<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Utilities;

use JeffreyKroonen\BolRetailer\Interfaces\ResponseInterface;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class Response implements ResponseInterface
{
    protected HttpResponseInterface $psrResponse;

    public function setPsrResponse(HttpResponseInterface $psrResponse): self
    {
        $this->psrResponse = $psrResponse;

        return $this;
    }

    public function header(?string $header = null): ?string
    {
        if (is_null($header)) {
            return $this->headers();
        }

        return $this->psrResponse->hasHeader($header) ? $this->psrResponse->getHeader($header)[0] : null;
    }

    public function headers(): array
    {
        $headers = [];
        foreach ($this->psrResponse->getHeaders() as $name => $value) {
            $headers[$name] = implode(', ', $value);
        }

        return $headers;
     }

    public function json(): array
    {
        $data = json_decode((string) $this->psrResponse->getBody(), true);
        if (json_last_error() === JSON_ERROR_NONE) {
            return $data;
        }

        return [];
    }

    public function statusCode(): int
    {
        return $this->psrResponse->getStatusCode();
    }
}
