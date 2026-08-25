<?php

namespace WlSdk\Wl\Tuition\Enrollment;

/**
 * Response from GET
 */
class TuitionClientsSummaryGetResponse
{
    /**
     * Summary of clients and events enrolled, per tuition.
     *
     * Keys - tuition IDs from {@link \WlSdk\Wl\Tuition\Enrollment\TuitionClientsSummary}. Values - summary
     * information:
     *
     * @var TuitionClientsSummaryGetResponseSummary[]|null
     */
    public ?array $a_summary = null;

    public function __construct(array $data)
    {
        $this->a_summary = isset($data['a_summary']) ? array_map(static fn ($item) => new TuitionClientsSummaryGetResponseSummary((array)$item), (array)$data['a_summary']) : null;
    }
}
