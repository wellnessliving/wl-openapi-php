<?php

namespace WlSdk\Wl\Promotion\Edit\Summary;

/**
 * Response from GET
 */
class SummaryGetResponse
{
    /**
     * Summary price in business currency.
     *
     * @var string|null
     */
    public ?string $m_summary = null;

    public function __construct(array $data)
    {
        $this->m_summary = isset($data['m_summary']) ? (string)$data['m_summary'] : null;
    }
}
