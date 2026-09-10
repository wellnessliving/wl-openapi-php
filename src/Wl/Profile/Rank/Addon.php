<?php

namespace WlSdk\Wl\Profile\Rank;

use WlSdk\WlSdkClient;

/**
 * Gets full list of ranks owned by the client.
 */
class Addon
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets full list of ranks owned by the client.
     *
     * Validates that the user belongs to the given business and rank category, loads the list of addon colors
     * available for the rank category, and loads the ranks currently owned by the client, enriching each rank
     * with the calculated number of days left and duration text for ranks with a limited duration.
     *
     * @return AddonGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AddonGetRequest $request): AddonGetResponse
    {
        return new AddonGetResponse($this->client->request('/Wl/Profile/Rank/Addon.json', $request->params(), 'GET'));
    }

    /**
     * Sets addon ranks in Belt.
     *
     * Validates that the current user has permission to manage ranks for the client, resolves the addon colors
     * available for the business rank type, checks that every submitted addon color is one of the available
     * colors, and saves the new addon selection for the client's rank category.
     *
     * @return AddonPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AddonPostRequest $request): AddonPostResponse
    {
        return new AddonPostResponse($this->client->request('/Wl/Profile/Rank/Addon.json', $request->params(), 'POST'));
    }
}
