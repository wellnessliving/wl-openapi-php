<?php

namespace WlSdk\Wl\Login\Add;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about users by email.
 */
class ProfilePurchaseOption
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about users by email.
     *
     * @return ProfilePurchaseOptionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProfilePurchaseOptionGetRequest $request): ProfilePurchaseOptionGetResponse
    {
        return new ProfilePurchaseOptionGetResponse($this->client->request('/Wl/Login/Add/ProfilePurchaseOption.json', $request->params(), 'GET'));
    }
}
