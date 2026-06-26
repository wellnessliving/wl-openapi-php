<?php

namespace WlSdk\Wl\Alert;

/**
 * Response from GET
 */
class AlertListGetResponse
{
    /**
     * List of alerts. For details see Alert::getList().
     *
     * @var array[]|null
     */
    public ?array $a_alert_list = null;

    public function __construct(array $data)
    {
        $this->a_alert_list = isset($data['a_alert_list']) ? (array)$data['a_alert_list'] : null;
    }
}
