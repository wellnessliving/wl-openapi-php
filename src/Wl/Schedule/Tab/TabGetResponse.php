<?php

namespace WlSdk\Wl\Schedule\Tab;

/**
 * Response from GET
 */
class TabGetResponse
{
    /**
     * An array containing information about tabs to present to the user.
     * Each array index corresponds to a tab.
     * Each array element is an array that contains the following fields:
     *
     * @var TabGetResponseTab[]|null
     */
    public ?array $a_tab = null;

    public function __construct(array $data)
    {
        $this->a_tab = isset($data['a_tab']) ? array_map(static fn ($item) => new TabGetResponseTab((array)$item), (array)$data['a_tab']) : null;
    }
}
