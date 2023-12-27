<?php

namespace App\Service;

use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\String\Slugger\SluggerInterface;

class Slugify
{
    public function __construct(
        private SluggerInterface $slugger,
    ) {
    }

    public function someMethod(): void
    {
        $slug = $this->slugger->slug('...');
    }
}


