<?php

namespace WlSdk\Wl\Pay\Method;

class ListGetRequest
{
    /**
     * Whether only active payment methods should be returned.
     *
     * @var bool|null
     */
    public ?bool $is_active = true;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Whether payment method {@link \WlSdk\RsPayMethodSid} should be included in response.
     *
     * @var bool|null
     */
    public ?bool $show_manual = null;

    /**
     * The key of a user to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_active' => $this->is_active,
            'k_business' => $this->k_business,
            'show_manual' => $this->show_manual,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
