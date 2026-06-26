<?php

namespace WlSdk\Wl\Report\Dashboard\Menu;

/**
 * Response from GET
 */
class MenuGetResponse
{
    /**
     * List of the available dashboards.
     *
     * @var array|null
     */
    public ?array $a_dashboard = null;

    public function __construct(array $data)
    {
        $this->a_dashboard = isset($data['a_dashboard']) ? (array)$data['a_dashboard'] : null;
    }
}
