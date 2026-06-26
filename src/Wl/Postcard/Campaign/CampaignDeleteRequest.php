<?php

namespace WlSdk\Wl\Postcard\Campaign;

class CampaignDeleteRequest
{
    /**
     * ID of mail campaign.
     * Primary key in CampaignSql table.
     *
     * @var string|null
     */
    public ?string $k_postcard_campaign = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_postcard_campaign' => $this->k_postcard_campaign,
            ],
            static fn ($v) => $v !== null
        );
    }
}
