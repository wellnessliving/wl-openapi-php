<?php

namespace WlSdk\Wl\Currency;

class CurrencyGetResponseCurrency
{
    /**
     * `true` - locate sign before amount; `false` - locate sign after amount.
     *
     * @var bool|null
     */
    public ?bool $is_before = null;

    /**
     * Sign of currency.
     *
     * @var string|null
     */
    public ?string $s_sign = null;

    /**
     * International code of the currency.
     *
     * @var string|null
     */
    public ?string $sid_currency = null;

    public function __construct(array $data)
    {
        $this->is_before = isset($data['is_before']) ? (bool)$data['is_before'] : null;
        $this->s_sign = isset($data['s_sign']) ? (string)$data['s_sign'] : null;
        $this->sid_currency = isset($data['sid_currency']) ? (string)$data['sid_currency'] : null;
    }
}
