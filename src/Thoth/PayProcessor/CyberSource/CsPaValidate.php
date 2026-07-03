<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

use WlSdk\WlSdkClient;

/**
 * Validates the `CyberSource` Payer Authentication result.
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
     * Validates the `CyberSource` Payer Authentication result.
     *
     * Retrieves the authentication result for the transaction validated by
     * [CsPaEnrollmentApi](/Thoth/PayProcessor/CyberSource/CsPaEnrollment.json)
     *  and confirms whether the payer authentication succeeded, allowing the merchant to proceed with
     *  processing the payment.
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
