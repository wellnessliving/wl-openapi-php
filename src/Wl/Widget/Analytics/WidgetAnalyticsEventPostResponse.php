<?php

namespace WlSdk\Wl\Widget\Analytics;

/**
 * Response from POST
 */
class WidgetAnalyticsEventPostResponse
{
    /**
     * Whether the event was durably accepted for asynchronous processing.
     *
     * @var bool|null
     */
    public ?bool $is_accepted = null;

    public function __construct(array $data)
    {
        $this->is_accepted = isset($data['is_accepted']) ? (bool)$data['is_accepted'] : null;
    }
}
