<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CampaignResend;

class CampaignResendPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Mail pattern live key.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern_live = null;

    /**
     * The time of the campaign resending, in the location's timezone.
     * An array with the following structure:
     *
     * @var array|null
     */
    public ?array $a_time = null;

    /**
     * The scheduled local date, without a time component in MySQL format.
     *
     * @var string|null
     */
    public ?string $dl_date = null;

    /**
     * Specifies whether the campaign should be sent immediately.
     * If `true`, the campaign will be sent immediately. If `false`, the campaign will be scheduled.
     *
     * @var bool|null
     */
    public ?bool $is_send_now = null;

    /**
     * Preview of the mail body as rendered in the mail client.
     *
     * @var string|null
     */
    public ?string $text_preview = null;

    /**
     * Subject of the mail.
     *
     * @var string|null
     */
    public ?string $text_subject = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_mail_pattern_live' => $this->k_mail_pattern_live,
            'a_time' => $this->a_time,
            'dl_date' => $this->dl_date,
            'is_send_now' => $this->is_send_now,
            'text_preview' => $this->text_preview,
            'text_subject' => $this->text_subject,
            ],
            static fn ($v) => $v !== null
        );
    }
}
