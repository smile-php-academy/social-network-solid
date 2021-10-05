<?php

declare(strict_types=1);

namespace App\SocialNetwork;

use App\Post;

interface SocialNetworkInterface
{
    public function publish(Post $post): void;
}
