<?php

declare(strict_types=1);

namespace App\SocialNetwork;

use App\Post;

class Facebook implements SocialNetworkInterface
{
    public function publish(Post $post): void
    {
        echo 'Facebook publish action  .....'. PHP_EOL;
        echo 'Post : ' . $post->getContent() . PHP_EOL;
    }
}
