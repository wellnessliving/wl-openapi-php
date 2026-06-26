<?php

namespace WlSdk\Wl\Business\Sms\Chat\Alert;

/**
 * Response from POST
 */
class SmsAlertPostResponse
{
    /**
     * Number of Alerts that are unread for the staff member. AlertManager::getCountNotViewedAlert().
     *
     * @var int|null
     */
    public ?int $i_alert_count = null;

    /**
     * An alert you want to check the read status of, after marking the chat messages as read
     *
     * @var int|null
     */
    public ?int $is_read = null;

    public function __construct(array $data)
    {
        $this->i_alert_count = isset($data['i_alert_count']) ? (int)$data['i_alert_count'] : null;
        $this->is_read = isset($data['is_read']) ? (int)$data['is_read'] : null;
    }
}
