<?php

namespace WlSdk\Wl\Virtual\Subscription;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Virtual/Subscription/Upgrade.json
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
     * Calls PUT /Wl/Virtual/Subscription/Upgrade.json.
     *
     * @return UpgradePutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(UpgradePutRequest $request): UpgradePutResponse
    {
        return new UpgradePutResponse($this->client->request('/Wl/Virtual/Subscription/Upgrade.json', $request->params(), 'PUT'));
    }
}
