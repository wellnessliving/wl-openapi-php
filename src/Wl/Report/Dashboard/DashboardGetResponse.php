<?php

namespace WlSdk\Wl\Report\Dashboard;

/**
 * Response from GET
 */
class DashboardGetResponse
{
    /**
     * Dashboard data.
     *
     * @var array|null
     */
    public ?array $a_dashboard_data = null;

    public function __construct(array $data)
    {
        $this->a_dashboard_data = isset($data['a_dashboard_data']) ? (array)$data['a_dashboard_data'] : null;
    }
}
