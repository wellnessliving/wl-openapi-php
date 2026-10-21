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
            's_bin' => $this->s_bin,
            ],
            static fn ($v) => $v !== null
        );
    }
}
