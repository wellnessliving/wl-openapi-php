<?php

namespace WlSdk\Wl\Reception\Application;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Reception/Application/ReceptionSecret.json
 */
class ReceptionSecret
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Reception/Application/ReceptionSecret.json.
     *
     * @return ReceptionSecretGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReceptionSecretGetRequest $request): ReceptionSecretGetResponse
    {
        return new ReceptionSecretGetResponse($this->client->request('/Wl/Reception/Application/ReceptionSecret.json', $request->params(), 'GET'));
    }
}
