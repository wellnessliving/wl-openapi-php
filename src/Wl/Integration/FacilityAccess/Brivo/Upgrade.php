<?php

namespace WlSdk\Wl\Integration\FacilityAccess\Brivo;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Integration/FacilityAccess/Brivo/Upgrade.json
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
     * Calls POST /Wl/Integration/FacilityAccess/Brivo/Upgrade.json.
     *
     * @return UpgradePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(UpgradePostRequest $request): UpgradePostResponse
    {
        return new UpgradePostResponse($this->client->request('/Wl/Integration/FacilityAccess/Brivo/Upgrade.json', $request->params(), 'POST'));
    }
}
