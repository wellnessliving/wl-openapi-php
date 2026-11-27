<?php

namespace WlSdk\Wl\Lead\Stage;

use WlSdk\WlSdkClient;

/**
 * Gets the lead stage of the client.
 */
class LeadStageUser
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets the lead stage of the client.
     *
     * The current user must be allowed to view the profile of the client, as for the profile page of the client
     * (the
     * privilege to view client profiles and the access to the client), and the client must be one whom the user
     * may see
     * in this business: a client of the business, or a franchise client by the rules of the franchise. A client
     * without a
     * stored stage which is not one of the stages of the business, is in the default stage of the business, and
     * that
     * stage is returned. An empty string is returned only if the business has no stages.
     *
     * Also tells whether the current user may change the stage of the client.
     *
     * @return LeadStageUserGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(LeadStageUserGetRequest $request): LeadStageUserGetResponse
    {
        return new LeadStageUserGetResponse($this->client->request('/Wl/Lead/Stage/LeadStageUser.json', $request->params(), 'GET'));
    }

    /**
     * Sets the lead stage of the client.
     *
     * If the client is already in this stage, nothing is changed.
     *
     * The staff member needs the privilege to change the lead stage ({@link \WlSdk\Wl\Privilege\PrivilegeSid}).
     * The
     * privilege to manage client profiles does not give it.
     *
     * @return LeadStageUserPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LeadStageUserPostRequest $request): LeadStageUserPostResponse
    {
        return new LeadStageUserPostResponse($this->client->request('/Wl/Lead/Stage/LeadStageUser.json', $request->params(), 'POST'));
    }
}
