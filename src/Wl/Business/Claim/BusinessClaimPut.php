<?php
namespace WlSdk\Wl\Business\Claim;

use WlSdk\WlSdkClient;

/**
 * Saves the Self-Setup wizard form data in the business claim log.
 */
class BusinessClaimPut
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves the Self-Setup wizard form data in the business claim log.
     *
     * Called at the end of the Self-Setup wizard to store the wizard input for internal auditing. Can only
     * be called once per business after it has been claimed.
     *
     * @return BusinessClaimPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(BusinessClaimPutRequest $request): BusinessClaimPutResponse
    {
        return new BusinessClaimPutResponse($this->client->request('/Wl/Business/Claim/BusinessClaim.json', $request->params(), 'PUT'));
    }
}
