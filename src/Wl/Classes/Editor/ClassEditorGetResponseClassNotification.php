<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseClassNotification
{
    /**
     * `true` if the clients of the class receive the default client notifications, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_client_notification = null;

    /**
     * `true` if the clients of the class receive a confirmation notification of its own, `false` if they receive
     * the
     * default one.
     *
     * @var bool|null
     */
    public ?bool $is_custom_confirmation = null;

    /**
     * `true` if the confirmation notification of the class is sent by email, `false` otherwise.
     *
     * Ignored while `is_custom_confirmation` is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_confirmation_mail = null;

    /**
     * `true` if the confirmation notification of the class is sent as a push message, `false` otherwise.
     *
     * Ignored while `is_custom_confirmation` is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_confirmation_push = null;

    /**
     * `true` if the confirmation notification of the class is sent by SMS, `false` otherwise.
     *
     * Ignored while `is_custom_confirmation` is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_confirmation_sms = null;

    /**
     * `true` if the clients of the class receive a reminder notification of its own, `false` if they receive the
     * default one.
     *
     * @var bool|null
     */
    public ?bool $is_custom_reminder = null;

    /**
     * `true` if the reminder notification of the class is sent by email, `false` otherwise.
     *
     * Ignored while `is_custom_reminder` is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_reminder_mail = null;

    /**
     * `true` if the reminder notification of the class is sent as a push message, `false` otherwise.
     *
     * Ignored while `is_custom_reminder` is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_reminder_push = null;

    /**
     * `true` if the reminder notification of the class is sent by SMS, `false` otherwise.
     *
     * Ignored while `is_custom_reminder` is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_custom_reminder_sms = null;

    /**
     * `true` if staff receive the default staff notifications of the class, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_staff_notification = null;

    public function __construct(array $data)
    {
        $this->is_client_notification = isset($data['is_client_notification']) ? (bool)$data['is_client_notification'] : null;
        $this->is_custom_confirmation = isset($data['is_custom_confirmation']) ? (bool)$data['is_custom_confirmation'] : null;
        $this->is_custom_confirmation_mail = isset($data['is_custom_confirmation_mail']) ? (bool)$data['is_custom_confirmation_mail'] : null;
        $this->is_custom_confirmation_push = isset($data['is_custom_confirmation_push']) ? (bool)$data['is_custom_confirmation_push'] : null;
        $this->is_custom_confirmation_sms = isset($data['is_custom_confirmation_sms']) ? (bool)$data['is_custom_confirmation_sms'] : null;
        $this->is_custom_reminder = isset($data['is_custom_reminder']) ? (bool)$data['is_custom_reminder'] : null;
        $this->is_custom_reminder_mail = isset($data['is_custom_reminder_mail']) ? (bool)$data['is_custom_reminder_mail'] : null;
        $this->is_custom_reminder_push = isset($data['is_custom_reminder_push']) ? (bool)$data['is_custom_reminder_push'] : null;
        $this->is_custom_reminder_sms = isset($data['is_custom_reminder_sms']) ? (bool)$data['is_custom_reminder_sms'] : null;
        $this->is_staff_notification = isset($data['is_staff_notification']) ? (bool)$data['is_staff_notification'] : null;
    }
}
