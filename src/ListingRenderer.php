<?php

namespace App;

class ListingRenderer implements ListingRendererInterface
{
    /**
     * @param array $listing
     * @return string
     */
    public function render(array $listing): string
    {
        return new Listing(ListingTypeEnum::from($listing[0]),$listing[1],$listing[2]);
    }
}