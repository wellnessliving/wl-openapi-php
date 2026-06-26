<?php

namespace WlSdk\Wl\Postcard\Campaign\CampaignEdit;

class CampaignEditSummaryGetRequest
{
    /**
     * Whether to send mails to active and inactive clients.
     * One of {@link \WlSdk\AFlagSid} constants.
     *
     * @var int|null
     * @see \WlSdk\AFlagSid
     */
    public ?int $id_flag_active = null;

    /**
     * Recipient group. One of {@link \WlSdk\Wl\Postcard\Campaign\CampaignClientSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Postcard\Campaign\CampaignClientSid
     */
    public ?int $id_postcard_campaign_client = null;

    /**
     * Business in which clients must be searched.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Serialized by JSON list of client types.
     * Every element is primary key in Sql table.
     *
     * @var string|null
     */
    public ?string $s_login_type = null;

    /**
     * Serialized by JSON list of client groups.
     * Every element is primary key in Sql table.
     *
     * @var string|null
     */
    public ?string $s_member_group = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_flag_active' => $this->id_flag_active,
            'id_postcard_campaign_client' => $this->id_postcard_campaign_client,
            'k_business' => $this->k_business,
            's_login_type' => $this->s_login_type,
            's_member_group' => $this->s_member_group,
            ],
            static fn ($v) => $v !== null
        );
    }
}
