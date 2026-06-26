<?php

namespace WlSdk\Wl\Collector;

class DebtActivatePostRequest
{
    /**
     * Currency of the payment. One of {@link \WlSdk\Core\Locale\CurrencySid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Locale\CurrencySid
     */
    public ?int $id_currency = null;

    /**
     * Business key of the debt.
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of debts that should be activated.
     *
     * Keys are user keys. Primary key in PassportLoginSql
     * Values are debt keys. Primary key in CollectorDebtSql.
     *
     * @var array|null
     */
    public ?array $a_collector_debt = null;

    /**
     * Text to be shown as reason of the skip.
     *
     * @var string|null
     */
    public ?string $text_reason = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_currency' => $this->id_currency,
            'k_business' => $this->k_business,
            'a_collector_debt' => $this->a_collector_debt,
            'text_reason' => $this->text_reason,
            ],
            static fn ($v) => $v !== null
        );
    }
}
