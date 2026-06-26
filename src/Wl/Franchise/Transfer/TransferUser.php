<?php

namespace WlSdk\Wl\Franchise\Transfer;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Franchise/Transfer/TransferUser.json
 */
class TransferUser
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Franchise/Transfer/TransferUser.json.
     *
     * @return TransferUserGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TransferUserGetRequest $request): TransferUserGetResponse
    {
        return new TransferUserGetResponse($this->client->request('/Wl/Franchise/Transfer/TransferUser.json', $request->params(), 'GET'));
    }
}
