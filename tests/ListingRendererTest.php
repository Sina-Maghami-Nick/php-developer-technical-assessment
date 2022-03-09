<?php

declare(strict_types=1);

namespace Tests;

use App\ListingRenderer;
use PHPUnit\Framework\TestCase;

class ListingRendererTest extends TestCase
{

    public function testRender()
    {
        foreach ($this->ListingArrayProvider() as $listingArray) {
            $listingString = ListingRenderer::render($listingArray);
            $this->assertEqualsCanonicalizing(array_filter(explode(';', $listingString)), $listingArray);
        }
    }

    protected function ListingArrayProvider(): array
    {
        return [
            "App" =>
                [
                    'type' => 'app',
                    'name' => 'Listing name',
                    'ios_url' => 'Listing URL',
                ],

            "Place" =>
                [
                    'type' => 'place',
                    'name' => 'Listing name',
                ],

            "Website" =>
                [
                    'type' => 'website',
                    'name' => 'Listing name',
                    'url' => 'Listing URL',
                ],

            "InPersonSupport" =>
                [
                    'type' => 'support group (face to face)',
                    'name' => 'Listing name',
                ],
            "OnlineSupport" =>
                [
                    'type' => 'support group (online)',
                    'name' => 'Listing name',
                    'url' => 'Listing URL',
                ]];
    }
}
