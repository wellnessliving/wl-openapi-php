<?php
namespace WlSdk\Thoth\WlPay\Bank\Card\Add;

use WlSdk\WlSdkClient;

/**
 * Gets code of bank card widget.
 */
class AddApi
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
     * The business key number used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The payment owner ID. This is different from the user ID. It can be found with
the [OwnerApi](/Thoth/WlPay/Owner/Owner.json).
     *
     * @var string|null
     */
    public ?string $k_pay_owner = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_card_detail = null;

    /**
     * Pay bank key to delete.
     *
     * @var string|null
     */
    public ?string $k_pay_bank = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets code of bank card widget.
     *
     * @deprecated
     *
     * @return array Parsed JSON response data.
     *   - string html_widget: The HTML form containing the fields required to add a card.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Thoth/WlPay/Bank/Card/Add/Add.json', $this->params(), 'GET');
    }

    /**
     * Saves new bank card.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Thoth/WlPay/Bank/Card/Add/Add.json', $this->params(), 'POST');
    }

    /**
     * Deletes saved card.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Thoth/WlPay/Bank/Card/Add/Add.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_pay_owner' => $this->k_pay_owner,
            'a_card_detail' => $this->a_card_detail,
            'k_pay_bank' => $this->k_pay_bank,
            ],
            static fn($v) => $v !== null
        );
    }
}
