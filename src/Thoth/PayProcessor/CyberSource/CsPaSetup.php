<?php

namespace WlSdk\Thoth\PayProcessor\CyberSource;

use WlSdk\WlSdkClient;

/**
 * Starts `CyberSource` Payer Authentication setup.
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
     * Starts `CyberSource` Payer Authentication setup.
     *
     * Validates the payment request and card data, starts a payment transaction, and requests
     *  `CyberSource` to set up payer authentication, returning the JWT and device collection URL
     *  needed to continue the flow.
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
