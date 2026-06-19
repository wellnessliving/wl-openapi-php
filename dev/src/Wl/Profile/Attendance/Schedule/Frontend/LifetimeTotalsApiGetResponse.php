<?php
namespace WlSdk\Wl\Profile\Attendance\Schedule\Frontend;

/**
 * Response from GET
 */
class LifetimeTotalsApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_total = null;

    public function __construct(array $data)
    {
        $this->a_total = isset($data['a_total']) ? (array)$data['a_total'] : null;
    }
}
