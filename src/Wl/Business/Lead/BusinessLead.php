<?php
namespace WlSdk\Wl\Business\Lead;

use WlSdk\WlSdkClient;

/**
 * Saves a new business lead referral record submitted through the Partner Program.
 */
class BusinessLead
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves a new business lead referral record submitted through the Partner Program.
     *
     * Used when a Partner Program member refers a new prospective client to WellnessLiving. Stores the
     * lead's contact details linked to the referring partner so that sales can follow up and attribute
     * the conversion to the correct partner.
     *
     * @return BusinessLeadPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessLeadPostRequest $request): BusinessLeadPostResponse
    {
        return new BusinessLeadPostResponse($this->client->request('/Wl/Business/Lead/BusinessLead.json', $request->params(), 'POST'));
    }
}
