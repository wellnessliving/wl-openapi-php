<?php
namespace WlSdk\Wl\Profile\PurchaseList;

class PurchaseListGetRequest
{
    /**
     * The key of a business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
