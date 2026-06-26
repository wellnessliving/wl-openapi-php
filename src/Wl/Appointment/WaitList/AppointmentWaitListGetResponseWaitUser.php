<?php

namespace WlSdk\Wl\Appointment\WaitList;

class AppointmentWaitListGetResponseWaitUser
{
    /**
     * User email. Empty string if current user has no access to this information.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * User name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * User phone. Empty string if the user has no phone or current user has not access to this information.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * User key. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Link to user logo.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    /**
     * Link to get form for send mail to user.
     *
     * @var string|null
     */
    public ?string $url_notify_mail = null;

    /**
     * Link to get form for send sms to user.
     *
     * @var string|null
     */
    public ?string $url_notify_sms = null;

    /**
     * Link to user profile.
     *
     * @var string|null
     */
    public ?string $url_profile = null;

    public function __construct(array $data)
    {
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
        $this->url_notify_mail = isset($data['url_notify_mail']) ? (string)$data['url_notify_mail'] : null;
        $this->url_notify_sms = isset($data['url_notify_sms']) ? (string)$data['url_notify_sms'] : null;
        $this->url_profile = isset($data['url_profile']) ? (string)$data['url_profile'] : null;
    }
}
