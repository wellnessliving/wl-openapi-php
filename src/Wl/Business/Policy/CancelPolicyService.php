<?php

namespace WlSdk\Wl\Business\Policy;

use WlSdk\WlSdkClient;

/**
 * Gets available services data of a business.
 */
class CancelPolicyService
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets available services data of a business.
     *
     * @return CancelPolicyServiceGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CancelPolicyServiceGetRequest $request): CancelPolicyServiceGetResponse
    {
        return new CancelPolicyServiceGetResponse($this->client->request('/Wl/Business/Policy/CancelPolicyService.json', $request->params(), 'GET'));
    }
}
