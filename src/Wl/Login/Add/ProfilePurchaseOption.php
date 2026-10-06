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
     * Validates that the business and the user exist and that the current user has access to view the
     * user's profile, then loads the user's active purchase options and returns them as a JSON-encoded string.
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
