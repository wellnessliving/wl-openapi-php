<?php

namespace WlSdk\Wl\Profile\Alert;

/**
 * Response from GET
 */
class AlertGetResponse
{
    /**
     * No description.
     *
     * @var AlertGetResponseAlert[]|null
     */
    public ?array $a_alert = null;

    /**
     * No description.
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
