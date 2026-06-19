<?php
namespace WlSdk\Wl\Profile\Contract;

use WlSdk\WlSdkClient;

/**
 * Completes a sale of a Purchase Option requiring a contract by submitting the signed contract.
 */
class ContractPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
