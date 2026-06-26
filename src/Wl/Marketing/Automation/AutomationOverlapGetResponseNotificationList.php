<?php

namespace WlSdk\Wl\Marketing\Automation;

class AutomationOverlapGetResponseNotificationList
{
    /**
     * Mail id. One of {@link \WlSdk\RsMailSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * Whether the email channel is enabled for the notification.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * Whether push channel is enabled for the notification.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * Whether SMS channel is enabled for the notification.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /**
     * Mail pattern key. Primary key in RsMailPatternSql table. `null` for default template.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern = null;

    /**
     * Notification description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Notification title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_mail = isset($data['id_mail']) ? (int)$data['id_mail'] : null;
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->is_push = isset($data['is_push']) ? (bool)$data['is_push'] : null;
        $this->is_sms = isset($data['is_sms']) ? (bool)$data['is_sms'] : null;
        $this->k_mail_pattern = isset($data['k_mail_pattern']) ? (string)$data['k_mail_pattern'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
