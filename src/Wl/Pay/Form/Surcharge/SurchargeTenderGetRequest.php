<?php

namespace WlSdk\Wl\Pay\Form\Surcharge;

class SurchargeTenderGetRequest
{
    /**
     * Payment method the card would be charged with.
     *
     * Must be {@link \WlSdk\RsPayMethodSid} or {@link \WlSdk\RsPayMethodSid}.
     *
     * @var int|null
     * @see \WlSdk\RsPayMethodSid
     */
    public ?int $id_pay_method = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Currency key.
     *
     * @var string|null
     */
    public ?string $k_currency = null;

    /**
     * Location key.
     *
     * `null`/`'0'` to use the system-wide merchant.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of a saved card to preview.
     *
     * Exactly one of {@link \WlSdk\Thoth\WlPay\Form\Surcharge\SurchargeTender} and {@link
     * \WlSdk\Thoth\WlPay\Form\Surcharge\SurchargeTender} must be set.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    /**
     * Amount of the payment without the surcharge, to calculate {@link
     * \WlSdk\Thoth\WlPay\Form\Surcharge\SurchargeTender} for.
     *
     * `null` if the surcharge is not asked for: the answer is then only {@link
     * \WlSdk\Thoth\WlPay\Form\Surcharge\SurchargeTender}, as it was
     * before the field appeared. The field is not a part of `KEY`, so a model of this API that
     * is shared by several widgets takes the amount that was set last.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * First digits of a newly-typed card number (at least 6).
     *
     * Exactly one of {@link \WlSdk\Thoth\WlPay\Form\Surcharge\SurchargeTender} and {@link
     * \WlSdk\Thoth\WlPay\Form\Surcharge\SurchargeTender} must be set.
     *
     * @var string|null
     */
    public ?string $s_bin = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_pay_method' => $this->id_pay_method,
            'k_business' => $this->k_business,
            'k_currency' => $this->k_currency,
            'k_location' => $this->k_location,
            'k_pay_bank' => $this->k_pay_bank,
            'm_amount' => $this->m_amount,
            's_bin' => $this->s_bin,
            ],
            static fn ($v) => $v !== null
        );
    }
}
