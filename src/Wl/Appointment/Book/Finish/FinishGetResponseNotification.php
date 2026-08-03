<?php

namespace WlSdk\Wl\Appointment\Book\Finish;

class FinishGetResponseNotification
{
    /**
     * `true` to attach calendar file, `false` to not attach calendar file.
     *
     * @var bool|null
     */
    public ?bool $is_attach = null;

    /**
     * Whether mail should track as a part of campaign. `true` if yes, `false` if no.
     *
     * @var bool|null
     */
    public ?bool $is_campaign = null;

    /**
     * `true` to send mail; `false` to not send.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * `true` to send push notification; `false` to not send.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * `true` to send SMS; `false` to not send.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /**
     * Business name.
     *
     * @var string|null
     */
    public ?string $text_business_name = null;

    /**
     * Reply email address.
     *
     * @var string|null
     */
    public ?string $text_business_reply = null;

    /**
     * Campaign name.
     *
     * @var string|null
     */
    public ?string $text_campaign = null;

    /**
     * Email content.
     *
     * @var string|null
     */
    public ?string $text_content_mail = null;

    /**
     * Push notification content.
     *
     * @var string|null
     */
    public ?string $text_push = null;

    /**
     * SMS content.
     *
     * @var string|null
     */
    public ?string $text_sms = null;

    /**
     * Email subject.
     *
     * @var string|null
     */
    public ?string $text_subject = null;

    public function __construct(array $data)
    {
        $this->is_attach = isset($data['is_attach']) ? (bool)$data['is_attach'] : null;
        $this->is_campaign = isset($data['is_campaign']) ? (bool)$data['is_campaign'] : null;
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->is_push = isset($data['is_push']) ? (bool)$data['is_push'] : null;
        $this->is_sms = isset($data['is_sms']) ? (bool)$data['is_sms'] : null;
        $this->text_business_name = isset($data['text_business_name']) ? (string)$data['text_business_name'] : null;
        $this->text_business_reply = isset($data['text_business_reply']) ? (string)$data['text_business_reply'] : null;
        $this->text_campaign = isset($data['text_campaign']) ? (string)$data['text_campaign'] : null;
        $this->text_content_mail = isset($data['text_content_mail']) ? (string)$data['text_content_mail'] : null;
        $this->text_push = isset($data['text_push']) ? (string)$data['text_push'] : null;
        $this->text_sms = isset($data['text_sms']) ? (string)$data['text_sms'] : null;
        $this->text_subject = isset($data['text_subject']) ? (string)$data['text_subject'] : null;
    }
}
