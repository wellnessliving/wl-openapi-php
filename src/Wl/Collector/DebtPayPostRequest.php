<?php
namespace WlSdk\Wl\Collector;

class DebtPayPostRequest
{
    /**
     * The currency of the payment.
     * One of {@link \WlSdk\Core\Locale\CurrencySid} constants.
     * 
     * Important! The currency must coincide with currency of the debt that was sent to collections.
     *
     * @var \WlSdk\Core\Locale\CurrencySid|null
     */
    public ?\WlSdk\Core\Locale\CurrencySid $id_currency = null;

    /**
     * The key of the business from which the debt originates.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user with the debt.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The payment method ID.
     * One of {@link \WlSdk\RsPayMethodSid} constants.
     * 
     * `null` if the payment method is unknown. In such cases, {@link \WlSdk\RsPayMethodSid} would be used.
     *
     * @var \WlSdk\RsPayMethodSid|null
     */
    public ?\WlSdk\RsPayMethodSid $id_pay_method = null;

    /**
     * The debt key towards which the payment was performed.
     *
     * @var string|null
     */
    public ?string $k_collector_debt = null;

    /**
     * The amount of money that's been paid towards the debt.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_currency' => $this->id_currency?->value,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'id_pay_method' => $this->id_pay_method?->value,
            'k_collector_debt' => $this->k_collector_debt,
            'm_amount' => $this->m_amount,
            ],
            static fn($v) => $v !== null
        );
    }
}
