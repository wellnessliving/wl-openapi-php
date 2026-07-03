<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

use WlSdk\WlSdkClient;

/**
 * Finalizes the `Nuvei` transaction after successful payer authentication.
 */
class NuveiTransactionOnAuthSuccess
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Finalizes the `Nuvei` transaction after successful payer authentication.
     *
     * Validates the payer authentication session and encrypted card token, then updates the payment
     *  transaction created by [NuveiOpenOrderApi](/Thoth/PayProcessor/Nuvei/NuveiOpenOrder.json) with the gateway
     * transaction ID and card data.
     *
     * @return NuveiTransactionOnAuthSuccessPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiTransactionOnAuthSuccessPostRequest $request): NuveiTransactionOnAuthSuccessPostResponse
    {
        return new NuveiTransactionOnAuthSuccessPostResponse($this->client->request('/Thoth/PayProcessor/Nuvei/NuveiTransactionOnAuthSuccess.json', $request->params(), 'POST'));
    }
}
