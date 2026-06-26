<?php

namespace WlSdk\Thoth\MarketingCampaigns\Report\CampaignList;

class SendCampaignGetResponseCampaignList
{
    /**
     * Send campaign methods. Each element has the next structure:
     *
     * @var SendCampaignGetResponseCampaignListCampaignMethod|null
     */
    public ?SendCampaignGetResponseCampaignListCampaignMethod $a_campaign_method = null;

    public function __construct(array $data)
    {
        $this->a_campaign_method = isset($data['a_campaign_method']) ? new SendCampaignGetResponseCampaignListCampaignMethod((array)$data['a_campaign_method']) : null;
    }
}
