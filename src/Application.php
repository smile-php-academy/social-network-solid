<?php

declare(strict_types=1);

namespace App;

use App\SocialNetwork\SocialNetworkInterface;

class Application
{
    /** @var <string, SocialNetworkInterface> */
    private array $socialNetworks = [];

    public function publish(string $alias, Post $post): void
    {
        $socialNetwork = $this->getSocialNetwork($alias);
        $socialNetwork->publish($post);
    }

    public function getSocialNetwork(string $alias): SocialNetworkInterface
    {
        if (!isset($this->socialNetworks[$alias])) {
            throw new \RuntimeException(sprintf('[%s] not supported', $alias));
        }

        return $this->socialNetworks[$alias];
    }

    public function addSocialNetwork(string $alias, SocialNetworkInterface $driver)
    {
        $this->socialNetworks[$alias] = $driver;
    }
}
