<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\SendCampaign;

/**
 * Response from GET
 */
class SendCampaignGetResponse
{
    /**
     * A campaign data to load.
     * For structure details see SendCampaign::getCampaign() method.
     *
     * @var string|null
     */
    public ?string $json_campaign_load = null;

    public function __construct(array $data)
    {
        $this->json_campaign_load = isset($data['json_campaign_load']) ? (string)$data['json_campaign_load'] : null;
    }
}
