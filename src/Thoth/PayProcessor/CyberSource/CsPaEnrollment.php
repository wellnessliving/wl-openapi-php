<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Thoth/PayProcessor/CyberSource/CsPaEnrollment.json
 */
class CsPaEnrollment
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Thoth/PayProcessor/CyberSource/CsPaEnrollment.json.
     *
     * @return CsPaEnrollmentPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CsPaEnrollmentPostRequest $request): CsPaEnrollmentPostResponse
    {
        return new CsPaEnrollmentPostResponse($this->client->request('/Thoth/PayProcessor/CyberSource/CsPaEnrollment.json', $request->params(), 'POST'));
    }
}
