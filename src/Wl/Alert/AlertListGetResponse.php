<?php

namespace WlSdk\Wl\Alert;

/**
 * Response from GET
 */
class AlertListGetResponse
{
    /**
     * List of alerts.
     *
     * @var AlertListGetResponseAlertList[]|null
     */
    public ?array $a_alert_list = null;

    public function __construct(array $data)
    {
        $this->a_alert_list = isset($data['a_alert_list']) ? array_map(static fn ($item) => new AlertListGetResponseAlertList((array)$item), (array)$data['a_alert_list']) : null;
    }
}
