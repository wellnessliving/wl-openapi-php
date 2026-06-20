<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass;

use WlSdk\WlSdkClient;

/**
 * Retrieves guest pass information for a client's membership.
 */
class GuestPass
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves guest pass information for a client's membership.
     *
     * Returns the guest pass configuration and remaining usage count for the specified login promotion.
     *
     * @return GuestPassGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(GuestPassGetRequest $request): GuestPassGetResponse
    {
        return new GuestPassGetResponse($this->client->request('/Wl/Login/Promotion/GuestPass/GuestPass.json', $request->params(), 'GET'));
    }

    /**
     * Updates the guest pass remaining usages for a client's membership.
     *
     * Adjusts the remaining guest pass count to the specified value and logs the change. Requires
     *  staff-level edit access for the login promotion.
     *
     * @return GuestPassPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(GuestPassPutRequest $request): GuestPassPutResponse
    {
        return new GuestPassPutResponse($this->client->request('/Wl/Login/Promotion/GuestPass/GuestPass.json', $request->params(), 'PUT'));
    }
}
