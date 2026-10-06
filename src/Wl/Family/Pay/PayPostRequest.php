<?php

namespace WlSdk\Wl\Family\Pay;

class PayPostRequest
{
    /**
     * ID of business to get information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of user to get information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * ID of user who will pay for user {@link \WlSdk\Wl\Family\Pay\Pay}.
     *
     * Empty if {@link \WlSdk\Wl\Family\Pay\Pay} will pay for self.
     *
     * @var string|null
     */
    public ?string $uid_payer = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'uid_payer' => $this->uid_payer,
            ],
            static fn ($v) => $v !== null
        );
    }
}
