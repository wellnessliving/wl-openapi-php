<?php

namespace WlSdk\Wl\Page\Backend;

/**
 * Response from GET
 */
class BackendConfigGetResponse
{
    /**
     * Data for the navigation banner template.
     *
     * Method `headQuick()` is preparing the data.
     *
     * @var array|null
     */
    public ?array $a_head_quick = null;

    /**
     * Data for the left panel template.
     *
     * Method `panelLeft()` is preparing the data.
     *
     * @var array|null
     */
    public ?array $a_panel_left = null;

    /**
     * Whether user has passed partner program manage privilege.
     *
     * @var bool|null
     */
    public ?bool $can_partner = null;

    /**
     * Whether current user can search for enterprise clients or not.
     *
     * @var bool|null
     */
    public ?bool $can_search_franchise = null;

    /**
     * Whether user can use smart search or not.
     *
     * @var bool|null
     */
    public ?bool $can_search_uid = null;

    /**
     * Whether enterprise clients should be included in the search or not.
     *
     * @var bool|null
     */
    public ?bool $is_franchisee_search_wide = null;

    public function __construct(array $data)
    {
        $this->a_head_quick = isset($data['a_head_quick']) ? (array)$data['a_head_quick'] : null;
        $this->a_panel_left = isset($data['a_panel_left']) ? (array)$data['a_panel_left'] : null;
        $this->can_partner = isset($data['can_partner']) ? (bool)$data['can_partner'] : null;
        $this->can_search_franchise = isset($data['can_search_franchise']) ? (bool)$data['can_search_franchise'] : null;
        $this->can_search_uid = isset($data['can_search_uid']) ? (bool)$data['can_search_uid'] : null;
        $this->is_franchisee_search_wide = isset($data['is_franchisee_search_wide']) ? (bool)$data['is_franchisee_search_wide'] : null;
    }
}
