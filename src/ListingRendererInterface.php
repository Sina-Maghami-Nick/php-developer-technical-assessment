<?php

declare(strict_types=1);

namespace App;

interface ListingRendererInterface
{
    public function render(array $listing): string;
}
