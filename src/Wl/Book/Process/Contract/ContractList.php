<?php

namespace WlSdk\Wl\Book\Process\Contract;

use WlSdk\WlSdkClient;

/**
 * Gets list of contracts tied to currently selected purchase options and whether contracts were skipped.
 */
class ContractList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of contracts tied to currently selected purchase options and whether contracts were skipped.
     *
     * @return ContractListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ContractListGetRequest $request): ContractListGetResponse
    {
        return new ContractListGetResponse($this->client->request('/Wl/Book/Process/Contract/ContractList.json', $request->params(), 'GET'));
    }

    /**
     * Manipulates flag indicating whether contracts are skipped.
     *
     * @return ContractListPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(ContractListPutRequest $request): ContractListPutResponse
    {
        return new ContractListPutResponse($this->client->request('/Wl/Book/Process/Contract/ContractList.json', $request->params(), 'PUT'));
    }
}
