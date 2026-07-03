<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

use WlSdk\WlSdkClient;

/**
 * Updates the amount of a previously opened `Nuvei` order.
 */
class NuveiUpdateOrder
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Updates the amount of a previously opened `Nuvei` order.
     *
     * Validates the payer authentication session, then requests `Nuvei` to update the amount of the order
     *  opened by {@link \WlSdk\Thoth\PayProcessor\Nuvei\NuveiOpenOrder} and adjusts the payment transaction
     * accordingly.
     *
     * @return NuveiUpdateOrderPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiUpdateOrderPostRequest $request): NuveiUpdateOrderPostResponse
    {
        return new NuveiUpdateOrderPostResponse($this->client->request('/Thoth/PayProcessor/Nuvei/NuveiUpdateOrder.json', $request->params(), 'POST'));
    }
}
