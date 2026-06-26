<?php

namespace WlSdk\Wl\Profile\Prize;

class ElementGetRequest
{
    /**
     * Key of redeemable prize.
     *
     * @var string|null
     */
    public ?string $k_login_prize = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_login_prize' => $this->k_login_prize,
            ],
            static fn ($v) => $v !== null
        );
    }
}
