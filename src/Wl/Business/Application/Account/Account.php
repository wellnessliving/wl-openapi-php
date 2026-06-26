<?php

namespace WlSdk\Wl\Business\Application\Account;

use WlSdk\WlSdkClient;

/**
 * Saves account data of provider `id_os`
 * for business `k_business`.
 */
class Account
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves account data of provider `id_os`
for business `k_business`.
     *
     * @return AccountPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(AccountPostRequest $request): AccountPostResponse
    {
        return new AccountPostResponse($this->client->request('/Wl/Business/Application/Account/Account.json', $request->params(), 'POST'));
    }
}
