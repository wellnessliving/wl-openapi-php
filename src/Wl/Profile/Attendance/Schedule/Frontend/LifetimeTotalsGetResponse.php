<?php
namespace WlSdk\Wl\Profile\Attendance\Schedule\Frontend;

/**
 * Response from GET
 */
class LifetimeTotalsGetResponse
{
    /**
     * No description.
     *
     * @var LifetimeTotalsGetResponseTotal[]|null
     */
    public ?array $a_total = null;

    public function __construct(array $data)
    {
        $this->a_total = isset($data['a_total']) ? array_map(static fn($item) => new LifetimeTotalsGetResponseTotal((array)$item), (array)$data['a_total']) : null;
    }
}
