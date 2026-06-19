<?php
namespace WlSdk\Wl\Purchase\Receipt;

use WlSdk\WlSdkClient;

/**
 * Gets purchase information.
 */
class PurchaseReceiptApi
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
     * Whether `url_print` and `url_print_receipt` require authentication.

If `true`, the URL contains a token that allows temporary access to the page without logging in. If 'false', the
page requires authentication.
     *
     * @var bool|null
     */
    public ?bool $is_url_public = null;

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
     * Gets purchase information.
     *
     * Returns full receipt data for the specified purchase, including business details, customer information,
     * itemized purchase items, payment methods, pricing summary, and print URLs.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_account_rest: No description.
     *   - array[] a_business: No description.
     *   - array[] a_card: No description.
     *   - array[] a_customer: No description.
     *   - array[] a_pay_method: No description.
     *   - array[] a_price: No description.
     *   - array[] a_purchase_item: No description.
     *   - string dtl_purchase: The local date of the purchase in MySQL format.
     *   - bool has_signature: Determines whether the payment contained a signature.
     *   - string html_receipt: HTML representation of the purchase receipt.
     *   - string text_purchase_id: The normalized purchase ID.
     *   - string text_receipt: The receipt text set in the store settings.
     *   - string url_print: The URL for printing on a normal printer.
     *   - string url_print_receipt: The URL for printing on a receipt printer.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Purchase/Receipt/PurchaseReceipt.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_url_public' => $this->is_url_public,
            'k_purchase' => $this->k_purchase,
            ],
            static fn($v) => $v !== null
        );
    }
}
