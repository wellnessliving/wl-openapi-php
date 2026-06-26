<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/CyberSource/CsCaptureContext.json
 */
class CsCaptureContext
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/CyberSource/CsCaptureContext.json.
     *
     * @return CsCaptureContextPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CsCaptureContextPostRequest $request): CsCaptureContextPostResponse
    {
        return new CsCaptureContextPostResponse($this->client->request('/Thoth/PayProcessor/CyberSource/CsCaptureContext.json', $request->params(), 'POST'));
    }
}
