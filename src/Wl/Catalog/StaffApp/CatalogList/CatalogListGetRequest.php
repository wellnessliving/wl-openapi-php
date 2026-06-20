<?php
namespace WlSdk\Wl\Catalog\StaffApp\CatalogList;

class CatalogListGetRequest
{
    /**
     * The key of the business to get categories for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     * This can affect the list of displayed products.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The visit key to pay for.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_visit' => $this->k_visit,
            ],
            static fn($v) => $v !== null
        );
    }
}
