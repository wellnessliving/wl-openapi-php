<?php
namespace WlSdk\Thoth\WlPay\Account;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about accounts of given user in given business.
 */
class AccountApi
{
    /**
     * If `true`, information for the account's owner is returned. Clients can be configured to pay for a
     * relative's
     * expenses. For example, a parent can pay for their child.
     * Otherwise, `false` to indicate information strictly for the specified user is returned.
     *
     * @var bool|null
     */
    public ?bool $is_owner = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

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
     * @return AccountApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): AccountApiGetResponse
    {
        return new AccountApiGetResponse($this->client->request('/Thoth/WlPay/Account/Account.json', $this->params(), 'GET'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'is_owner' => $this->is_owner,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
