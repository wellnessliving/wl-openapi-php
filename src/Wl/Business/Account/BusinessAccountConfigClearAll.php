<?php

namespace WlSdk\Wl\Business\Account;

use WlSdk\WlSdkClient;

/**
 * Clears an existing payment and sets the payment to the status of 'Clear Balance'.
 */
class BusinessAccountConfigClearAll
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Clears an existing payment and sets the payment to the status of 'Clear Balance'.
     *
     * @return BusinessAccountConfigClearAllPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessAccountConfigClearAllPostRequest $request): BusinessAccountConfigClearAllPostResponse
    {
        return new BusinessAccountConfigClearAllPostResponse($this->client->request('/Wl/Business/Account/BusinessAccountConfigClearAll.json', $request->params(), 'POST'));
    }
}
