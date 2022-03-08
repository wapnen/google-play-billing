<?php

namespace Imdhemy\GooglePlay\ValueObjects;

/**
 * Price
 * Definition of a price, i.e. currency and units.
 */
final class Price
{
    /**
     * @var string
     */
    private $priceMicros;

    /**
     * @var string
     */
    private $currency;

    /**
     * Price constructor.
     * @param string $priceMicros
     * @param string $currency
     */
    public function __construct(string $priceMicros, string $currency)
    {
        $this->priceMicros = $priceMicros;
        $this->currency = $currency;
    }

    /**
     * @param array $attributes
     * @return static
     */
    public static function fromArray(array $attributes): self
    {
        return new self($attributes['priceMicros'], $attributes['currency']);
    }

    /**
     * @return string
     */
    public function getPriceMicros(): string
    {
        return $this->priceMicros;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Get array representation of current value
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
