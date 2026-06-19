<?php
namespace WlSdk\Thoth\WlPay\Owner;

use WlSdk\WlSdkClient;

/**
 * Returns information about payment owner.
 */
class OwnerApi
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
     * Business key.

`null` if not passed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of a user to show information for.
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
     * Returns information about payment owner.
     *
     * Must be called before initiating any payment on behalf of a user, to determine the correct payment
     * owner keys to pass to the payment form. Also indicates whether a family-account relationship exists
     * (for example, a parent paying for a child), which affects how the payment form is pre-populated.
     *
     * @return array Parsed JSON response data.
     *   - int id_pay_owner: The type of user for which transactions can be made (this property is optional).

This is one of the [RsPayOwnerSid](#/components/schemas/RsPayOwnerSid) constants.
     *   - bool is_pay_self_only: Is client pay only for self. If parent pays for child this flag will be `false` for both.
`true` if client pay only for self, `false` - otherwise.
     *   - string k_pay_owner: The payment owner key. This is used for financial transactions.
     *   - string k_pay_owner_money: Key of the money owner.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Thoth/WlPay/Owner/Owner.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
