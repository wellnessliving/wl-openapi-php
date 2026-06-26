<?php

namespace WlSdk\Wl\Marketing\Overview\Welcome;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Marketing/Overview/Welcome/Welcome.json
 */
class Welcome
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Marketing/Overview/Welcome/Welcome.json.
     *
     * @return WelcomeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(WelcomeGetRequest $request): WelcomeGetResponse
    {
        return new WelcomeGetResponse($this->client->request('/Wl/Marketing/Overview/Welcome/Welcome.json', $request->params(), 'GET'));
    }

    /**
     * Calls DELETE /Wl/Marketing/Overview/Welcome/Welcome.json.
     *
     * @return WelcomeDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(WelcomeDeleteRequest $request): WelcomeDeleteResponse
    {
        return new WelcomeDeleteResponse($this->client->request('/Wl/Marketing/Overview/Welcome/Welcome.json', $request->params(), 'DELETE'));
    }
}
