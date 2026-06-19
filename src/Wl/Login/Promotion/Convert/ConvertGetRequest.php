<?php
namespace WlSdk\Wl\Login\Promotion\Convert;

class ConvertGetRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The login promotion key.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            ],
            static fn($v) => $v !== null
        );
    }
}
