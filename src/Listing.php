<?php

namespace App;

class Listing implements ListingInterface
{
    /**
     * Listing Type
     *
     * @var ListingTypeEnum
     */
    protected ListingTypeEnum $type;

    /**
     * Listing Name
     *
     * @var String
     */
    protected string $name;

    /**
     * Listing Url
     *
     * @var String|null
     */
    protected ?string $url;


    /**
     * Constructor
     *
     * @param ListingTypeEnum $type
     * @param string $name
     * @param string|null $url
     */
    public function __construct(ListingTypeEnum $type, string $name, ?string $url)
    {
        $this->type = $type;
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * ToString
     *
     * @return string
     */
    public function __toString(): string
    {
        return ListingTypeEnum::$this->getType() . ";" . $this->getName() . ";" . $this->getUrl();
    }

    public function getType(): ListingTypeEnum
    {
        return $this->type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }
}