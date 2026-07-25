<?php

namespace WlSdk\Wl\Pay\Bank\Ach;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * List of ACH accounts:
     *
     * @var ListGetResponseList[]|null
     */
    public ?array $a_list = null;

    /**
     * Whether new ACH account can be added.
     *
     * `true` if new ACH account can be added.
     * `false` if new ACH account can not be added.
     *
     * @var bool|null
     */
    public ?bool $can_add = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new ListGetResponseList((array)$item), (array)$data['a_list']) : null;
        $this->can_add = isset($data['can_add']) ? (bool)$data['can_add'] : null;
    }
}
