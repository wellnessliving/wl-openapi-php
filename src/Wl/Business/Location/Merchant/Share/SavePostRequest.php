<?php

namespace WlSdk\Wl\Business\Location\Merchant\Share;

class SavePostRequest
{
    /**
     * Business key. Obligatory field.
     *
     * Primary key from RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * A list of source locations for merchant sharing.
     *
     * `null` to not to change this list.
     *
     * @var string[]|null
     */
    public ?array $a_location_from = null;

    /**
     * A list of destination locations for merchant sharing.
     *
     * `null` to not to change this list.
     *
     * @var string[]|null
     */
    public ?array $a_location_to = null;

    /**
     * Delete all sets for the specified business.
     *
     * @var bool|null
     */
    public ?bool $is_clear = null;

    /**
     * Merchant sharing group ID.
     *
     * Primary key from GroupSql table.
     *
     * `null` to create new group.
     *
     * @var string|null
     */
    public ?string $k_merchant_share_group = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_location_from' => $this->a_location_from,
            'a_location_to' => $this->a_location_to,
            'is_clear' => $this->is_clear,
            'k_merchant_share_group' => $this->k_merchant_share_group,
            ],
            static fn ($v) => $v !== null
        );
    }
}
