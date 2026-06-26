<?php

namespace WlSdk\Wl\Currency;

/**
 * Response from GET
 */
class CurrencyGetResponse
{
    /**
     * Keys - currency keys. Values - information about currency:
     *
     * @var CurrencyGetResponseCurrency[]|null
     */
    public ?array $a_currency = null;

    public function __construct(array $data)
    {
        $this->a_currency = isset($data['a_currency']) ? array_map(static fn ($item) => new CurrencyGetResponseCurrency((array)$item), (array)$data['a_currency']) : null;
    }
}
