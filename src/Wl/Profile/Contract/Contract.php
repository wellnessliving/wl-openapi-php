<?php

namespace WlSdk\Wl\Profile\Contract;

use WlSdk\WlSdkClient;

/**
 * Returns contract information for the specified purchase option.
 */
class Contract
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
     *  client. If the purchase option requires agreement to several distinct contracts at once,
     *  returns them through {@link \WlSdk\Wl\Profile\Contract\ContractGetResponse::$a_contract_list} instead, each
     * rendered the same
     *  way as a single contract, using the discount already resolved for that specific contract -
     *  {@link \WlSdk\Wl\Profile\Contract\Contract}, {@link \WlSdk\Wl\Profile\Contract\Contract}, and
     *  {@link \WlSdk\Wl\Profile\Contract\Contract} are not supported in that case.
     *
     * @return ContractGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ContractGetRequest $request): ContractGetResponse
    {
        return new ContractGetResponse($this->client->request('/Wl/Profile/Contract/Contract.json', $request->params(), 'GET'));
    }

    /**
     * Completes a sale of a Purchase Option requiring a contract by submitting the signed contract.
     *
     * Accepts an encoded client signature and agreement flag, decodes the signature, and records
     *  the signed contract for the specified purchase item.
     *
     * @return ContractPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ContractPostRequest $request): ContractPostResponse
    {
        return new ContractPostResponse($this->client->request('/Wl/Profile/Contract/Contract.json', $request->params(), 'POST'));
    }
}
