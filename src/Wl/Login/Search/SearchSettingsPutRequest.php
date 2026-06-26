<?php

namespace WlSdk\Wl\Login\Search;

class SearchSettingsPutRequest
{
    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * `true` if found client should be automatically check-in if possible.
     * `false` if not.
     * `null` if setting should not be changed within the put request.
     *
     * @var bool|null
     */
    public ?bool $is_auto_check_in = null;

    /**
     * `true` if enterprise clients (clients from different franchisees) should be included in the result. Can be
     * applied
     *   only in the franchise businesses.
     * `false`if not.
     * `null` if setting should not be changed within the put request.
     *
     * @var bool|null
     */
    public ?bool $is_franchisee_search_wide = null;

    /**
     * `true` if inactive clients should be included in the result.
     * `false`if not.
     * `null` if setting should not be changed within the put request.
     *
     * @var bool|null
     */
    public ?bool $is_inactive = null;

    /**
     * `true` if member ID should be shown in the result.
     * `false`if not.
     * `null` if setting should not be changed within the put request.
     *
     * @var bool|null
     */
    public ?bool $is_show_client_id = null;

    /**
     * `true` if email should be shown in the result.
     * `false` if not.
     * `null` if setting should not be changed within the put request.
     *
     * @var bool|null
     */
    public ?bool $is_show_email = null;

    /**
     * `true` if phone number should be shown in the result.
     * `false` if not.
     * `null` if setting should not be changed within the put request.
     *
     * @var bool|null
     */
    public ?bool $is_show_phone = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'is_auto_check_in' => $this->is_auto_check_in,
            'is_franchisee_search_wide' => $this->is_franchisee_search_wide,
            'is_inactive' => $this->is_inactive,
            'is_show_client_id' => $this->is_show_client_id,
            'is_show_email' => $this->is_show_email,
            'is_show_phone' => $this->is_show_phone,
            ],
            static fn ($v) => $v !== null
        );
    }
}
