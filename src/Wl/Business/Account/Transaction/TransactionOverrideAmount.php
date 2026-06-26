<?php

namespace WlSdk\Wl\Business\Account\Transaction;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/Transaction/TransactionOverrideAmount.json
 */
class TransactionOverrideAmount
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls PUT /Wl/Business/Account/Transaction/TransactionOverrideAmount.json.
     *
     * @return TransactionOverrideAmountPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(TransactionOverrideAmountPutRequest $request): TransactionOverrideAmountPutResponse
    {
        return new TransactionOverrideAmountPutResponse($this->client->request('/Wl/Business/Account/Transaction/TransactionOverrideAmount.json', $request->params(), 'PUT'));
    }
}
