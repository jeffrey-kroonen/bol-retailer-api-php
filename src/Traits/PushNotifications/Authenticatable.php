<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer\Traits\PushNotifications;

use phpseclib3\Crypt\PublicKeyLoader;
use phpseclib3\Crypt\RSA;

trait Authenticatable
{
    public function authenticate(string $subscriptionKey, string $signatureKey, string $body): bool
    {
        $decodedSubscriptionKey = base64_decode($subscriptionKey);
        $publicKey = PublicKeyLoader::load($decodedSubscriptionKey)
            ->withPadding(RSA::ENCRYPTION_PKCS1);

        $decodedSignatureKey = base64_decode($signatureKey);

        return $publicKey->verify($body, $decodedSignatureKey);
    }
}
