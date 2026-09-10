<?php

namespace WlSdk\Wl\Collector\DebtStatus;

class DebtStatusGetRequest
{
    /**
     * The currency for which status should be retrieved.
     * One of {@link \WlSdk\Core\Locale\CurrencySid} constants.
     *
     * `null` if status should be retrieved for current business currency.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\CurrencySid
     */
    public ?int $id_currency = null;

    /**
     * The key of the business within which status of the user should be retrieved.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user for which status should be retrieved.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_currency' => $this->id_currency,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
