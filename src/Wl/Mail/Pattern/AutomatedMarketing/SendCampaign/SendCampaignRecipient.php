<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\SendCampaign;

use WlSdk\WlSdkClient;

/**
 * Gets quantity of recipients.
 */
class SendCampaignRecipient
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets quantity of recipients.
     *
     * @return SendCampaignRecipientGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SendCampaignRecipientGetRequest $request): SendCampaignRecipientGetResponse
    {
        return new SendCampaignRecipientGetResponse($this->client->request('/Wl/Mail/Pattern/AutomatedMarketing/SendCampaign/SendCampaignRecipient.json', $request->params(), 'GET'));
    }
}
