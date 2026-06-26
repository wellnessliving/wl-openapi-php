<?php

namespace WlSdk\Thoth\MarketingCampaigns\Report\CampaignList;

/**
 * Response from GET
 */
class SendCampaignGetResponse
{
    /**
     * List of the 'Send campaign' methods.
     *
     * @var SendCampaignGetResponseCampaignList[]|null
     */
    public ?array $a_campaign_list = null;

    public function __construct(array $data)
    {
        $this->a_campaign_list = isset($data['a_campaign_list']) ? array_map(static fn ($item) => new SendCampaignGetResponseCampaignList((array)$item), (array)$data['a_campaign_list']) : null;
    }
}
