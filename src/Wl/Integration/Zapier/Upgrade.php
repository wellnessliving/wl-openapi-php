<?php

namespace WlSdk\Wl\Integration\Zapier;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Integration/Zapier/Upgrade.json
 */
class Upgrade
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Integration/Zapier/Upgrade.json.
     *
     * @return UpgradePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(UpgradePostRequest $request): UpgradePostResponse
    {
        return new UpgradePostResponse($this->client->request('/Wl/Integration/Zapier/Upgrade.json', $request->params(), 'POST'));
    }
}
