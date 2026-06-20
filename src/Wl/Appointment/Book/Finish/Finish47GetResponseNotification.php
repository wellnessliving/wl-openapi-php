<?php

namespace WlSdk\Wl\Appointment\Book\Finish;

class Finish47GetResponseNotification
{
    /**
     * `true` to send mail; `false` to not send.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * `true` to send SMS; `false` to not send.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /**
     * `true` to send push notification; `false` to not send.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    public function __construct(array $data)
    {
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->is_sms = isset($data['is_sms']) ? (bool)$data['is_sms'] : null;
        $this->is_push = isset($data['is_push']) ? (bool)$data['is_push'] : null;
    }
}
