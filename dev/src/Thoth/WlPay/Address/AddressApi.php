<?php
namespace WlSdk\Thoth\WlPay\Address;

use WlSdk\WlSdkClient;

/**
 * Gets user's payment addresses information.
 */
class AddressApi
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
     * The ID of the payment owner type.
One of [RsPayOwnerSid](#/components/schemas/RsPayOwnerSid) constants.
     *
     * @var int|null
     */
    public ?int $id_pay_owner = null;

    /**
     * Business key, where the payment is performed.
`null` if pay owner is not user.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The primary key of a payment owner.
This could be the business of the user depending on a [AddressApi](/Thoth/WlPay/Address/Address.json) value.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets user's payment addresses information.
     *
     * Returns the list of saved payment addresses for the specified owner type and key, including address fields,
     * country and region details, and the currently selected address. Returns `null` if the current user cannot
     * edit bank accounts for the owner.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_pay_address: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Thoth/WlPay/Address/Address.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'id_pay_owner' => $this->id_pay_owner,
            'k_business' => $this->k_business,
            'k_id' => $this->k_id,
            ],
            static fn($v) => $v !== null
        );
    }
}
