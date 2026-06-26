<?php

namespace WlSdk\Wl\Book\Process\Contract;

use WlSdk\WlSdkClient;

/**
 * Gets information about contract.
 */
class ContractItem
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about contract.
     *
     * @return ContractItemGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ContractItemGetRequest $request): ContractItemGetResponse
    {
        return new ContractItemGetResponse($this->client->request('/Wl/Book/Process/Contract/ContractItem.json', $request->params(), 'GET'));
    }

    /**
     * Marks contract as agreed to and updates client signature on it.
     *
     * @return ContractItemPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ContractItemPutRequest $request): ContractItemPutResponse
    {
        return new ContractItemPutResponse($this->client->request('/Wl/Book/Process/Contract/ContractItem.json', $request->params(), 'PUT'));
    }

    /**
     * Marks the contract as declined by removing purchase item tied to it from selection, thus removing the contract.
     *
     * @return ContractItemDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ContractItemDeleteRequest $request): ContractItemDeleteResponse
    {
        return new ContractItemDeleteResponse($this->client->request('/Wl/Book/Process/Contract/ContractItem.json', $request->params(), 'DELETE'));
    }
}
