<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

use WlSdk\WlSdkClient;

/**
 * Cancels the `Nuvei` transaction.
 */
class NuveiTransactionCancel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Cancels the `Nuvei` transaction.
     *
     * Voids the payer authentication session opened by {@link \WlSdk\Thoth\PayProcessor\Nuvei\NuveiOpenOrder} and
     * schedules the
     *  underlying payment transaction to be voided.
     *
     * @return NuveiTransactionCancelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NuveiTransactionCancelPostRequest $request): NuveiTransactionCancelPostResponse
    {
        return new NuveiTransactionCancelPostResponse($this->client->request('/Thoth/PayProcessor/Nuvei/NuveiTransactionCancel.json', $request->params(), 'POST'));
    }
}
