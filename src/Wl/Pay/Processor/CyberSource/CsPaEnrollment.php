<?php

namespace WlSdk\Wl\Pay\Processor\CyberSource;

use WlSdk\WlSdkClient;

/**
 * Checks `CyberSource` Payer Authentication enrollment.
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
     * Checks `CyberSource` Payer Authentication enrollment.
     *
     * Verifies whether the payer must complete additional authentication steps for the transaction
     *  started by {@link \WlSdk\Thoth\PayProcessor\CyberSource\CsPaSetup}, returning a JWT and interaction URL
     * when a challenge is required.
     *
     * @return CsPaEnrollmentPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CsPaEnrollmentPostRequest $request): CsPaEnrollmentPostResponse
    {
        return new CsPaEnrollmentPostResponse($this->client->request('/Wl/Pay/Processor/CyberSource/CsPaEnrollment.json', $request->params(), 'POST'));
    }
}
