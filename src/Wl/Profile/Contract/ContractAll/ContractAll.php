<?php

namespace WlSdk\Wl\Profile\Contract\ContractAll;

use WlSdk\WlSdkClient;

/**
 * Gets list of contracts.
 */
class ContractAll
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of contracts.
     *
     * Returns every contract the user has subscribed to or is required to agree to for the given
     *  business, including the agreement date, signature link, and contract text.
     *
     * @return ContractAllGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ContractAllGetRequest $request): ContractAllGetResponse
    {
        return new ContractAllGetResponse($this->client->request('/Wl/Profile/Contract/ContractAll/ContractAll.json', $request->params(), 'GET'));
    }
}
