<?php

namespace WlSdk\Thoth\MarketingCampaigns\Report\CampaignDetail;

class ClickTrackingGetRequest
{
    /**
     * Send date.
     *
     * @var string|null
     */
    public ?string $dtl_send = null;

    /**
     * Mail campaign status ID. One of {@link \WlSdk\Wl\Mail\Campaign\MailCampaignStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mail\Campaign\MailCampaignStatusSid
     */
    public ?int $id_mail_campaign_status = null;

    /**
     * Mail history filter. One of {@link \WlSdk\RsMailHistorySid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsMailHistorySid
     */
    public ?int $id_mail_status = null;

    /**
     * Whether a mail pattern live specific.
     *
     * @var bool|null
     */
    public ?bool $is_mail_pattern_live_specific = null;

    /**
     * Business key specific purchase item belongs to.
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
     * Mail campaign title.
     *
     * @var string|null
     */
    public ?string $text_mail_campaign = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtl_send' => $this->dtl_send,
            'id_mail_campaign_status' => $this->id_mail_campaign_status,
            'id_mail_status' => $this->id_mail_status,
            'is_mail_pattern_live_specific' => $this->is_mail_pattern_live_specific,
            'k_business' => $this->k_business,
            'k_mail_pattern_live' => $this->k_mail_pattern_live,
            'text_mail_campaign' => $this->text_mail_campaign,
            ],
            static fn ($v) => $v !== null
        );
    }
}
