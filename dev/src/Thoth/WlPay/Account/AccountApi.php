<?php
namespace WlSdk\Thoth\WlPay\Account;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about accounts of given user in given business.
 */
class AccountApi
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * If `true`, information for the account's owner is returned. Clients can be configured to pay for a relative's
expenses. For example, a parent can pay for their child.
Otherwise, `false` to indicate information strictly for the specified user is returned.
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
     * @return array Parsed JSON response data.
     *   - array[] a_account: No description.
     *   - array[] a_account_nx: No description.
     *   - bool is_debtor: Determines whether the user is a debtor. If `true` - the owner of this account is a debtor.
If `false` - the user is not a debtor or the information is not returned for the
account owner ([AccountApi](/Thoth/WlPay/Account/Account.json) is `false`).
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Thoth/WlPay/Account/Account.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_owner' => $this->is_owner,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
