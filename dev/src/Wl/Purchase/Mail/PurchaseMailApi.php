<?php
namespace WlSdk\Wl\Purchase\Mail;

use WlSdk\WlSdkClient;

/**
 * Sends mail message with list of purchased items for specified purchase.
 */
class PurchaseMailApi
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
     * Determines whether mail sending should be forced.
     *
     * @var bool|null
     */
    public ?bool $is_send_force = null;

    /**
     * The key of the purchase.
     *
     * @var string|null
     */
    public ?string $k_purchase = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends mail message with list of purchased items for specified purchase.
     *
     * Validates the caller's access to the purchase and sends a receipt email to the appropriate recipient
     * (staff member or client), recording the action in the mail history log.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Purchase/Mail/PurchaseMail.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_send_force' => $this->is_send_force,
            'k_purchase' => $this->k_purchase,
            ],
            static fn($v) => $v !== null
        );
    }
}
