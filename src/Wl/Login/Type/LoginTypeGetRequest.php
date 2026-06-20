<?php

namespace WlSdk\Wl\Login\Type;

class LoginTypeGetRequest
{
    /**
     * If `true`, this `k_business` is a franchisor, and login types of all franchisees should be returned.
     *
     * @var bool|null
     */
    public ?bool $is_franchisor = null;

    /**
     * The business key used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_franchisor' => $this->is_franchisor,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
