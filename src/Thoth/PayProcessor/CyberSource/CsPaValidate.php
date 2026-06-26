<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/CyberSource/CsPaValidate.json
 */
class CsPaValidate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/CyberSource/CsPaValidate.json.
     *
     * @return CsPaValidatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CsPaValidatePostRequest $request): CsPaValidatePostResponse
    {
        return new CsPaValidatePostResponse($this->client->request('/Thoth/PayProcessor/CyberSource/CsPaValidate.json', $request->params(), 'POST'));
    }
}
