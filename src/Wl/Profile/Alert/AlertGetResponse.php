<?php

namespace WlSdk\Wl\Profile\Alert;

/**
 * Response from GET
 */
class AlertGetResponse
{
    /**
     * A list of alerts. Every element is an array with the following keys:
     *
     * @var AlertGetResponseAlert[]|null
     */
    public ?array $a_alert = null;

    /**
     * A list of warnings. Every element is an array with the following keys:
     *
     * @var AlertGetResponseWarning[]|null
     */
    public ?array $a_warning = null;

    public function __construct(array $data)
    {
        $this->a_alert = isset($data['a_alert']) ? array_map(static fn ($item) => new AlertGetResponseAlert((array)$item), (array)$data['a_alert']) : null;
        $this->a_warning = isset($data['a_warning']) ? array_map(static fn ($item) => new AlertGetResponseWarning((array)$item), (array)$data['a_warning']) : null;
    }
}
