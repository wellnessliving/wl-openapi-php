<?php

namespace WlSdk\Wl\Appointment\Book\Product;

class Product62GetRequest
{
    /**
     * The key of a location where appointment is going to be booked.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of a service to show information for.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * The key of a user to show information for.
     *
     * Products with a {@link \WlSdk\Wl\Shop\Product\PurchaseRestrictionSid} restriction will be filtered out.
     * Only those products that match the client type or those that have no restrictions will be shown.
     *
     * `null` if the client is not logged in.
     *
     * If you don't need to filter products by client type/group, use
     * [ProductApi](/Wl/Appointment/Book/Product/Product.json).
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_location' => $this->k_location,
            'k_service' => $this->k_service,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
