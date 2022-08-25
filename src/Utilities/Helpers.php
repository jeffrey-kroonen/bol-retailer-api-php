<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Utilities;

use JeffreyKroonen\BolRetailer\Exceptions\UrlNotValidException;
use UnitEnum;

trait Helpers
{
    /**
     * Unpack an array with enums to an array with only the values of each enum.
     *
     * @param array $enums
     * @return array
     */
    private function unpack(array $enums): array
    {
        $data = [];

        foreach ($enums as $enum) {
            if ($enum instanceof UnitEnum) {
                $data[] = $enum->value;
                continue;
            }

            $data[] = $enum;
        }

        return $data;
    }

    /**
     * Validate the URL on pattern.
     *
     * @param string $url
     * @return string
     * @throws UrlNotValidException
     */
    private function validatedUrl(string $url): string
    {
        $regexMatch = preg_match(
            pattern: '/[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)/',
            subject: $url
        );
        if ($regexMatch === false || $regexMatch === 0) {
            throw new UrlNotValidException($url);
        }

        return $url;
    }
}
