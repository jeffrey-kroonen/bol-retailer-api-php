<?php

declare(strict_types=1);

namespace JeffreyKroonen\BolRetailer;

use JeffreyKroonen\BolRetailer\Endpoints\Orders;
use JeffreyKroonen\BolRetailer\Endpoints\Returns;
use JeffreyKroonen\BolRetailer\Endpoints\Subscriptions;
use JeffreyKroonen\BolRetailer\Interfaces\ClientInterface;
use JeffreyKroonen\BolRetailer\Utilities\Auth;

class Client implements ClientInterface
{
    private Auth $auth;

    /**
     * Create a new Client instance.
     *
     * @param string|null $bolClientId
     * @param string|null $bolClientSecret
     */
    public function __construct(?string $bolClientId = null, ?string $bolClientSecret = null)
    {
        if (! is_null($bolClientId) && ! is_null($bolClientSecret)) {
            $this->auth = (new Auth(
                bolClientId: $bolClientId,
                bolClientSecret: $bolClientSecret
            ))
            ->authenticate();
        }
    }

    /**
     * Mutator for the auth property.
     *
     * @param Auth $auth
     * @return self
     */
    public function setAuth(Auth $auth): self
    {
        $this->auth = $auth->authenticate();

        return $this;
    }

    /**
     * Get a new Endpoints\Orders instance.
     *
     * @return Orders
     */
    public function orders(): Orders
    {
        return new Orders(auth: $this->auth);
    }

    /**
     * Get a new Endpoints\Returns instance.
     *
     * @return Returns
     */
    public function returns(): Returns
    {
        return new Returns(auth: $this->auth);
    }

    /**
     * Get a new Endpoints\Subscriptions instance.
     *
     * @return Subscriptions
     */
    public function subscriptions(): Subscriptions
    {
        return new Subscriptions(auth: $this->auth);
    }
}
