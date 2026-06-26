<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

class CsPaSetupPostRequest
{
    /**
     * Credit card data.
     *
     * Contents of the payment source as it presents on the payment form.
     * This data is passed into RsPayBankCardSelectWidget::data_set().
     *
     * @var array|null
     */
    public ?array $a_card = null;

    /**
     * ID of the actor.
     *
     * One of {@link \WlSdk\RsPayActorSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPayActorSid
     */
    public ?int $id_pay_actor = null;

    /**
     * Whether authorization or capture should be performed.
     *
     * `true` (or anything that is not empty) to perform authorization and void immediately.
     *
     * `false` (or anything that is empty, or do not pass this value) to capture the payment amount.
     *
     * @var bool|null
     */
    public ?bool $is_authorize = null;

    /**
     * Key of the business which receives the payment.
     *
     * Primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the business merchant that should be used to perform the request.
     *
     * Primary key in RsBusinessMerchantSql.
     *
     * @var string|null
     */
    public ?string $k_business_merchant = null;

    /**
     * Key of a custom payment method.
     *
     * Primary key in MethodSql.
     *
     * `null` or an empty string if payment is performed with a standard payment method.
     *
     * Only payment methods based on {@link \WlSdk\RsPayMethodSid} are accepted.
     *
     * @var string|null
     */
    public ?string $k_pay_method = null;

    /**
     * Payment amount.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * Surcharge amount.
     *
     * Empty string or null for zero surcharge amount.
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

    /**
     * UID of the payment owner.
     *
     * @var string|null
     */
    public ?string $uid_pay_owner = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_card' => $this->a_card,
            'id_pay_actor' => $this->id_pay_actor,
            'is_authorize' => $this->is_authorize,
            'k_business' => $this->k_business,
            'k_business_merchant' => $this->k_business_merchant,
            'k_pay_method' => $this->k_pay_method,
            'm_amount' => $this->m_amount,
            'm_surcharge' => $this->m_surcharge,
            'uid_pay_owner' => $this->uid_pay_owner,
            ],
            static fn ($v) => $v !== null
        );
    }
}
