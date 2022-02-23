<?php

declare(strict_types=1);

namespace App;

interface ListingInterface
{
    public function getType(): ListingTypeEnum;

    public function getName(): string;

    public function getUrl(): ?string;
}
