<?php

namespace WlSdk\Wl\Franchise\Transfer;

use WlSdk\WlSdkClient;

/**
 * Creates transfer.
 */
class TransferAdd
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Creates transfer.
     *
     * @return TransferAddPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(TransferAddPostRequest $request): TransferAddPostResponse
    {
        return new TransferAddPostResponse($this->client->request('/Wl/Franchise/Transfer/TransferAdd.json', $request->params(), 'POST'));
    }
}
