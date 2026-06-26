<?php

namespace WlSdk\Wl\Franchise\Transfer\Edit;

use WlSdk\WlSdkClient;

/**
 * Gets information about start and end dates of franchise transfer.
 */
class TransferEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about start and end dates of franchise transfer.
     *
     * @return TransferEditGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(TransferEditGetRequest $request): TransferEditGetResponse
    {
        return new TransferEditGetResponse($this->client->request('/Wl/Franchise/Transfer/Edit/TransferEdit.json', $request->params(), 'GET'));
    }

    /**
     * Edits franchise transfer or or creates a new one if term of the transfer is increased (or transfer becomes permanent).
     *
     * @return TransferEditPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(TransferEditPutRequest $request): TransferEditPutResponse
    {
        return new TransferEditPutResponse($this->client->request('/Wl/Franchise/Transfer/Edit/TransferEdit.json', $request->params(), 'PUT'));
    }
}
