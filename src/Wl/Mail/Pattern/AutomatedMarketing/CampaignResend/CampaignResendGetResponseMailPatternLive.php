<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CampaignResend;

class CampaignResendGetResponseMailPatternLive
{
    /**
     * Date of sending the campaign.
     *
     * @var string|null
     */
    public ?string $dtu_send = null;

    /**
     * Body text of the campaign.
     *
     * @var string|null
     */
    public ?string $text_campaign = null;

    /**
     * Subject of the campaign.
     *
     * @var string|null
     */
    public ?string $text_subject = null;

    /**
     * Preview of the mail body as rendered in the mail client (may be empty).
     *
     * @var string|null
     */
    public ?string $text_preview = null;

    public function __construct(array $data)
    {
        $this->dtu_send = isset($data['dtu_send']) ? (string)$data['dtu_send'] : null;
        $this->text_campaign = isset($data['text_campaign']) ? (string)$data['text_campaign'] : null;
        $this->text_subject = isset($data['text_subject']) ? (string)$data['text_subject'] : null;
        $this->text_preview = isset($data['text_preview']) ? (string)$data['text_preview'] : null;
    }
}
