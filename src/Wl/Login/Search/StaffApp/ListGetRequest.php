<?php

namespace WlSdk\Wl\Login\Search\StaffApp;

class ListGetRequest
{
    /**
     * `true` - the search ignores the setting of QUICK Auto Check-In of the current staff member, so at a business
     * with
     * Dynamic ID clients are found by name, email, phone or client ID, and not only by the live dynamic barcode.
     *
     * `false` - the setting is followed: while QUICK Auto Check-In is on, a business with Dynamic ID finds a
     * client by
     * the live dynamic barcode only.
     *
     * @var bool|null
     */
    public ?bool $is_auto_check_in_ignore = null;

    /**
     * `true` - search among whole franchise; `false` - search in specified business only.
     *
     * @var bool|null
     */
    public ?bool $is_franchisee_search_wide = null;

    /**
     * The business key number used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The search string. Clients can be matched by name or email.
     *
     * At a business with Dynamic ID the live dynamic barcode of a client is still matched first, see
     * {@link \WlSdk\Wl\Login\Search\StaffApp\ListEndpoint}.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_auto_check_in_ignore' => $this->is_auto_check_in_ignore,
            'is_franchisee_search_wide' => $this->is_franchisee_search_wide,
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
