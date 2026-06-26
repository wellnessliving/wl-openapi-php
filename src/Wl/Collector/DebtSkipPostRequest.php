<?php

namespace WlSdk\Wl\Collector;

class DebtSkipPostRequest
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
     * Business key of the debt.
     * Primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * List of debts that should be skipped.
     *
     * Keys are user keys. Primary key in PassportLoginSql
     * Values are debt keys. Primary key in CollectorDebtSql.
     *
     * @var array|null
     */
    public ?array $a_collector_debt = null;

    /**
     * Debt key towards which skip should be performed.
     * Primary key in CollectorDebtSql.
     *
     * @var string|null
     */
    public ?string $k_collector_debt = null;

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
            'uid' => $this->uid,
            'a_collector_debt' => $this->a_collector_debt,
            'k_collector_debt' => $this->k_collector_debt,
            'text_reason' => $this->text_reason,
            ],
            static fn ($v) => $v !== null
        );
    }
}
