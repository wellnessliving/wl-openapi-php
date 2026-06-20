<?php
namespace WlSdk\Wl\Catalog\CatalogList;

class ListGetRequest
{
    /**
     * Arguments from direct purchase link, which can give additional access to products, which are available
     *   only by such link.
     *
     * @var array|null
     */
    public ?array $a_direct_link = null;

    /**
     * `true` to consider the requirement to have a credit card for booking
     * (this requirement can be set in business settings)
     * `false` to ignore it.
     *
     * @var bool|null
     */
    public ?bool $is_credit_card_check = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of a location. If `0`, all products in the business are retrieved.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The key of user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_direct_link' => $this->a_direct_link,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
