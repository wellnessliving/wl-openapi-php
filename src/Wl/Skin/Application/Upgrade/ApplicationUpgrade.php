<?php

namespace WlSdk\Wl\Skin\Application\Upgrade;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Skin/Application/Upgrade/ApplicationUpgrade.json
 */
class ApplicationUpgrade
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Skin/Application/Upgrade/ApplicationUpgrade.json.
     *
     * @return ApplicationUpgradePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ApplicationUpgradePostRequest $request): ApplicationUpgradePostResponse
    {
        return new ApplicationUpgradePostResponse($this->client->request('/Wl/Skin/Application/Upgrade/ApplicationUpgrade.json', $request->params(), 'POST'));
    }
}
