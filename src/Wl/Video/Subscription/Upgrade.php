<?php

namespace WlSdk\Wl\Video\Subscription;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Video/Subscription/Upgrade.json
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
     * Calls PUT /Wl/Video/Subscription/Upgrade.json.
     *
     * @return UpgradePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(UpgradePutRequest $request): UpgradePutResponse
    {
        return new UpgradePutResponse($this->client->request('/Wl/Video/Subscription/Upgrade.json', $request->params(), 'PUT'));
    }
}
