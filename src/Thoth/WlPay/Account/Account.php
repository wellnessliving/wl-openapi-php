<?php
namespace WlSdk\Thoth\WlPay\Account;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about accounts of given user in given business.
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
     * Retrieves information about accounts of given user in given business.
     *
     * Returns the list of existing accounts and accounts not yet created for the user within the specified
     * business,
     * including balance, currency, and payment method details.
     * When [AccountApi](/Thoth/WlPay/Account/Account.json) is `true`, resolves the money owner and includes the
     * debtor status.
     *
     * @return AccountGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(AccountGetRequest $request): AccountGetResponse
    {
        return new AccountGetResponse($this->client->request('/Thoth/WlPay/Account/Account.json', $request->params(), 'GET'));
    }
}
