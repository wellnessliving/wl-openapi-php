<?php

namespace WlSdk\Thoth\WlPay\Transaction;

use WlSdk\WlSdkClient;

/**
 * Changes payment transaction according to request.
 */
class Edit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes payment transaction according to request.
     *
     * @return EditPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(EditPutRequest $request): EditPutResponse
    {
        return new EditPutResponse($this->client->request('/Thoth/WlPay/Transaction/Edit.json', $request->params(), 'PUT'));
    }
}
