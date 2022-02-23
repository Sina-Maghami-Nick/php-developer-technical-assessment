# Health Place PHP Developer Techincal Assessment

Health Place provides multiple types of listings for search results, each with varying data structures. For example, an `app` will have an iOS and/or a Google Play Store URL, whereas a `face to face support group` will need an address.

You've been tasked with building a solution that will take any listing and transforming it to an appropriate structure for that listing type.

## Instructions

Two interfaces have been provided in the `/src` directory. Your solution should take `ListingInterface` and transform it into the appropriate structure.

Depending on the type of listing, the following data structures should be used.

```php
// App
[
    'type' => 'app',
    'name' => 'Listing name',
    'ios_url' => 'Listing URL',
];

// Place
[
    'type' => 'place',
    'name' => 'Listing name',
];

// Website
[
    'type' => 'website',
    'name' => 'Listing name',
    'url' => 'Listing URL',
];

// In person support group
[
    'type' => 'support group (face to face)',
    'name' => 'Listing name',
];

// Online support group
[
    'type' => 'support group (online)',
    'name' => 'Listing name',
    'url' => 'Listing URL',
];
```

The solution should then call `ListingRendererInterface::render()` with the listing array passed in.

Your unit tests should confirm this works as expected.

## Setup

A Docker Compose configuration has been provided. You can run the following commands to get started:

```bash
# Build the Docker image.
docker compose build

# Install composer dependencies.
docker compose run --rm php composer install

# Run unit tests.
docker compose run --rm php phpunit
```

You are free to not use Docker, but you'll need to set up the environment yourself if you choose to do so.
