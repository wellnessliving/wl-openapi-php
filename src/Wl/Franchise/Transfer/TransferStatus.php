<?php

namespace WlSdk\Wl\Franchise\Transfer;

use WlSdk\WlSdkClient;

/**
 * Changes transfer status.
 */
class TransferStatus
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Changes transfer status.
     *
     * @return TransferStatusPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(TransferStatusPutRequest $request): TransferStatusPutResponse
    {
        return new TransferStatusPutResponse($this->client->request('/Wl/Franchise/Transfer/TransferStatus.json', $request->params(), 'PUT'));
    }
}
