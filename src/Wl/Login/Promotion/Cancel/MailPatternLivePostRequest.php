<?php

namespace WlSdk\Wl\Login\Promotion\Cancel;

class MailPatternLivePostRequest
{
    /**
     * Primary key of business in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * UID user's key of the actor. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /**
     * Deactivation date.
     *
     * @var string|null
     */
    public ?string $dl_deactivation = null;

    /**
     * Type of copy to business on `s_business_mail`, one of {@link \WlSdk\RsMailCopySid}.
     * `null` if not initialized.
     *
     * @var int|null
     * @see \WlSdk\RsMailCopySid
     */
    public ?int $id_mail_copy_business = null;

    /**
     * Whether this notification should be tracked as a campaign.
     *
     * @var bool|null
     */
    public ?bool $is_campaign = null;

    /**
     * `true` if user must get email,`false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * `true` if user must get push-notification,`false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * `true` if user must get SMS notification,`false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /**
     * Business mail.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_business_mail = null;

    /**
     * Business name.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_business_name = null;

    /**
     * Business reply.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_business_reply = null;

    /**
     * Company name.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_campaign = null;

    /**
     * Content of email.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_html = null;

    /**
     * Content of push notification.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_push = null;

    /**
     * Content of SMS.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_sms = null;

    /**
     * Message subject.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_subject = null;

    /**
     * Content of email as text.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_text = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_actor' => $this->uid_actor,
            'dl_deactivation' => $this->dl_deactivation,
            'id_mail_copy_business' => $this->id_mail_copy_business,
            'is_campaign' => $this->is_campaign,
            'is_mail' => $this->is_mail,
            'is_push' => $this->is_push,
            'is_sms' => $this->is_sms,
            's_business_mail' => $this->s_business_mail,
            's_business_name' => $this->s_business_name,
            's_business_reply' => $this->s_business_reply,
            's_campaign' => $this->s_campaign,
            's_html' => $this->s_html,
            's_push' => $this->s_push,
            's_sms' => $this->s_sms,
            's_subject' => $this->s_subject,
            's_text' => $this->s_text,
            ],
            static fn ($v) => $v !== null
        );
    }
}
