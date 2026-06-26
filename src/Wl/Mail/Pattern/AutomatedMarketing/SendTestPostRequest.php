<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing;

class SendTestPostRequest
{
    /**
     * Call to action data.
     * Used only for automated marketing messages to resolve action placeholders when sending a test notification.
     *
     * `null` when no call-to-action is required for the test message.
     *
     * @var array|null
     */
    public ?array $a_action = null;

    /**
     * ID of the notification. One of {@link \WlSdk\RsMailSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * ID of the mail form. One of {@link \WlSdk\RsMailFormSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsMailFormSid
     */
    public ?int $id_mail_form = null;

    /**
     * Primary key of business in RsBusinessSql table.
     * `null` for system business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Mail pattern key. Primary key in RsMailPatternSql table.
     *
     * Not set in case of sending test notification from 'Send campaign' panel.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern = null;

    /**
     * Mail pattern live key. Primary key in RsMailPatternLiveSql table.
     * Set in case of sending test notification from 'Send campaign' panel.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern_live = null;

    /**
     * Email of a recipient.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Phone of a recipient.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_action' => $this->a_action,
            'id_mail' => $this->id_mail,
            'id_mail_form' => $this->id_mail_form,
            'k_business' => $this->k_business,
            'k_mail_pattern' => $this->k_mail_pattern,
            'k_mail_pattern_live' => $this->k_mail_pattern_live,
            'text_mail' => $this->text_mail,
            'text_phone' => $this->text_phone,
            ],
            static fn ($v) => $v !== null
        );
    }
}
