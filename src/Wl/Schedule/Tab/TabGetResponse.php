<?php
namespace WlSdk\Wl\Schedule\Tab;

/**
 * Response from GET
 */
class TabGetResponse
{
    /**
     * No description.
     *
     * @var TabGetResponseTab[]|null
     */
    public ?array $a_tab = null;

    public function __construct(array $data)
    {
        $this->a_tab = isset($data['a_tab']) ? array_map(static fn($item) => new TabGetResponseTab((array)$item), (array)$data['a_tab']) : null;
    }
}
