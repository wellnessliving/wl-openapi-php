<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass;

use WlSdk\WlSdkClient;

/**
 * Retrieves guest pass information for a client's membership.
 */
class GuestPassGet
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
}
