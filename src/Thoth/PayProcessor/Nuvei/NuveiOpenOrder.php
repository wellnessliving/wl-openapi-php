<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

use WlSdk\WlSdkClient;

/**
 * Opens a `Nuvei` order for the payment transaction.
 */
class NuveiOpenOrder
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Opens a `Nuvei` order for the payment transaction.
     *
     * Authenticates the merchant credentials, starts a payment transaction, and requests `Nuvei` to open
     *  an order for the requested amount, returning the order and session identifiers needed to continue
     *  the payer authentication flow.
     *
     * @return NuveiOpenOrderPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiOpenOrderPostRequest $request): NuveiOpenOrderPostResponse
    {
        return new NuveiOpenOrderPostResponse($this->client->request('/Thoth/PayProcessor/Nuvei/NuveiOpenOrder.json', $request->params(), 'POST'));
    }
}
