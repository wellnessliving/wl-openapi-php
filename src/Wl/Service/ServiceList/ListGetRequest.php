<?php
namespace WlSdk\Wl\Service\ServiceList;

class ListGetRequest
{
    /**
     * Whether to return franchisee-created appointment types (if business is franchisor).
     * `true` to include franchisee-created appointment types.
     *
     * @var bool|null
     */
    public ?bool $is_franchise = null;

    /**
     * Business key, primary key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_franchise' => $this->is_franchise,
            'k_business' => $this->k_business,
            ],
            static fn($v) => $v !== null
        );
    }
}
