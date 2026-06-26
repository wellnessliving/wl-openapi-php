<?php

namespace WlSdk\Wl\Business\Partner\Dashboard;

/**
 * Response from GET
 */
class DashboardGetResponse
{
    /**
     * Data for chart report.
     *
     * @var string|null
     */
    public ?string $html_chart = null;

    public function __construct(array $data)
    {
        $this->html_chart = isset($data['html_chart']) ? (string)$data['html_chart'] : null;
    }
}
