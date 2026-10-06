<?php

namespace WlSdk\Wl\Profile\Rank;

class AddonPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Rank Category key.
     *
     * @var string|null
     */
    public ?string $k_rank_category = null;

    /**
     * User's key in which profile should be shown addons.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * List of new addons for rank where each item is a selected HEX color code.
     *
     * @var string[]|null
     */
    public ?array $a_addon_new = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_rank_category' => $this->k_rank_category,
            'uid' => $this->uid,
            'a_addon_new' => $this->a_addon_new,
            ],
            static fn ($v) => $v !== null
        );
    }
}
