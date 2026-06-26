<?php

namespace WlSdk\Wl\Profile\Page\Overview;

use WlSdk\WlSdkClient;

/**
 * Saves settings for client's profile overview widgets and summary cards.
 */
class ProfilePageOverview
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves settings for client's profile overview widgets and summary cards.
     *
     * @return ProfilePageOverviewPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ProfilePageOverviewPostRequest $request): ProfilePageOverviewPostResponse
    {
        return new ProfilePageOverviewPostResponse($this->client->request('/Wl/Profile/Page/Overview/ProfilePageOverview.json', $request->params(), 'POST'));
    }
}
