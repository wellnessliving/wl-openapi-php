<?php
namespace WlSdk\Wl\Schedule\Tab;

/**
 * Response from GET
 */
class TabApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_tab = null;

    public function __construct(array $data)
    {
        $this->a_tab = isset($data['a_tab']) ? (array)$data['a_tab'] : null;
    }
}
