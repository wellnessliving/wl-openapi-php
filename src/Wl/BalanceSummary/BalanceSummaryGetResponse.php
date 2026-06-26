<?php

namespace WlSdk\Wl\BalanceSummary;

/**
 * Response from GET
 */
class BalanceSummaryGetResponse
{
    /**
     * A list of account custom.
     *
     * Each element has the following structure:
     *
     * @var BalanceSummaryGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new BalanceSummaryGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
