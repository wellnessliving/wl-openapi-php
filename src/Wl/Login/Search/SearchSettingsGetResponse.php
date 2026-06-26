<?php

namespace WlSdk\Wl\Login\Search;

/**
 * Response from GET
 */
class SearchSettingsGetResponse
{
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

    public function __construct(array $data)
    {
        $this->is_auto_check_in = isset($data['is_auto_check_in']) ? (bool)$data['is_auto_check_in'] : null;
        $this->is_franchisee_search_wide = isset($data['is_franchisee_search_wide']) ? (bool)$data['is_franchisee_search_wide'] : null;
        $this->is_inactive = isset($data['is_inactive']) ? (bool)$data['is_inactive'] : null;
        $this->is_show_client_id = isset($data['is_show_client_id']) ? (bool)$data['is_show_client_id'] : null;
        $this->is_show_email = isset($data['is_show_email']) ? (bool)$data['is_show_email'] : null;
        $this->is_show_phone = isset($data['is_show_phone']) ? (bool)$data['is_show_phone'] : null;
    }
}
