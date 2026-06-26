<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/CyberSource/CsPaSetup.json
 */
class CsPaSetup
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/CyberSource/CsPaSetup.json.
     *
     * @return CsPaSetupPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CsPaSetupPostRequest $request): CsPaSetupPostResponse
    {
        return new CsPaSetupPostResponse($this->client->request('/Thoth/PayProcessor/CyberSource/CsPaSetup.json', $request->params(), 'POST'));
    }
}
