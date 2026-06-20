<?php
namespace WlSdk\Wl\Login\Search\StaffApp;

class ListGetRequest
{
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
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_franchisee_search_wide' => $this->is_franchisee_search_wide,
            'k_business' => $this->k_business,
            'text_search' => $this->text_search,
            ],
            static fn($v) => $v !== null
        );
    }
}
