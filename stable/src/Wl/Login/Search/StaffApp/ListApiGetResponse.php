<?php
namespace WlSdk\Wl\Login\Search\StaffApp;

/**
 * Response from GET
 */
class ListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_list = null;

    /**
     * If `true`, then this user can add other users via the Add Client page.
     *
     * @var bool|null
     */
    public ?bool $can_add = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
        $this->can_add = isset($data['can_add']) ? (bool)$data['can_add'] : null;
    }
}
