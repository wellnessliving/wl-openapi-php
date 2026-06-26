<?php

namespace WlSdk\Wl\Business\Sms\Chat\Alert;

class SmsAlertPostRequest
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

    /**
     * An alert you want to check the read status of, after marking the chat messages as read
     *
     * @var string|null
     */
    public ?string $k_alert = null;

    /**
     * Key of the business this sms chat is connected to. Primary key from RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the user sms chat is related to. Primary key from PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_alert_count' => $this->i_alert_count,
            'is_read' => $this->is_read,
            'k_alert' => $this->k_alert,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
