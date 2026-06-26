<?php

namespace WlSdk\Thoth\ProgressLog\ProfilePage;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/ProgressLog/ProfilePage/ProgressLogProfilePageView.json
 */
class ProgressLogProfilePageView
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Thoth/ProgressLog/ProfilePage/ProgressLogProfilePageView.json.
     *
     * @return ProgressLogProfilePageViewGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ProgressLogProfilePageViewGetRequest $request): ProgressLogProfilePageViewGetResponse
    {
        return new ProgressLogProfilePageViewGetResponse($this->client->request('/Thoth/ProgressLog/ProfilePage/ProgressLogProfilePageView.json', $request->params(), 'GET'));
    }
}
