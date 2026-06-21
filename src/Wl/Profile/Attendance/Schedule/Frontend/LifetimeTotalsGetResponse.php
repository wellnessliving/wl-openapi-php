<?php

namespace WlSdk\Wl\Profile\Attendance\Schedule\Frontend;

/**
 * Response from GET
 */
class LifetimeTotalsGetResponse
{
    /**
     * Report totals.
     *
     * A set of key-value pairs.
     *
     * Each element has followed structure:
     *
     * @var LifetimeTotalsGetResponseTotal[]|null
     */
    public ?array $a_total = null;

    public function __construct(array $data)
    {
        $this->a_total = isset($data['a_total']) ? array_map(static fn ($item) => new LifetimeTotalsGetResponseTotal((array)$item), (array)$data['a_total']) : null;
    }
}
