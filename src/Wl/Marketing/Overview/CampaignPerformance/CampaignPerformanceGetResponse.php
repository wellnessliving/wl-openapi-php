<?php

namespace WlSdk\Wl\Marketing\Overview\CampaignPerformance;

/**
 * Response from GET
 */
class CampaignPerformanceGetResponse
{
    /**
     * Result totals.
     *
     * @var array|null
     */
    public ?array $a_total = null;

    public function __construct(array $data)
    {
        $this->a_total = isset($data['a_total']) ? (array)$data['a_total'] : null;
    }
}
