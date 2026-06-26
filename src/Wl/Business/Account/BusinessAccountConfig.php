<?php

namespace WlSdk\Wl\Business\Account;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Business/Account/BusinessAccountConfig.json
 */
class BusinessAccountConfig
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Business/Account/BusinessAccountConfig.json.
     *
     * @return BusinessAccountConfigPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessAccountConfigPostRequest $request): BusinessAccountConfigPostResponse
    {
        return new BusinessAccountConfigPostResponse($this->client->request('/Wl/Business/Account/BusinessAccountConfig.json', $request->params(), 'POST'));
    }
}
