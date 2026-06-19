<?php
namespace WlSdk\Wl\Profile\Contract;

use WlSdk\WlSdkClient;

/**
 * Returns contract information for the specified purchase option.
 */
class ContractGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns contract information for the specified purchase option.
     *
     * Renders the contract text for the specified purchase option, applying any applicable
     *  discounts, and returns the content needed to display the contract acceptance modal to the
     *  client.
     *
     * @return ContractGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ContractGetRequest $request): ContractGetResponse
    {
        return new ContractGetResponse($this->client->request('/Wl/Profile/Contract/Contract.json', $request->params(), 'GET'));
    }
}
