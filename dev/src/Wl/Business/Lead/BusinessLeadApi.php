<?php
namespace WlSdk\Wl\Business\Lead;

use WlSdk\WlSdkClient;

/**
 * Saves a new business lead referral record submitted through the Partner Program.
 */
class BusinessLeadApi
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
     * The business's partner key.
     *
     * @var string|null
     */
    public ?string $k_business_partner = null;

    /**
     * The business's name.
     *
     * @var string|null
     */
    public ?string $text_business_name = null;

    /**
     * The client's full name.
     *
     * @var string|null
     */
    public ?string $text_client_name = null;

    /**
     * The client's email.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    /**
     * The client's phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * The business's partner promo code.
     *
     * @var string|null
     */
    public ?string $text_promo_code = null;

    /**
     * The website URL.
     *
     * @var string|null
     */
    public ?string $url_website = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves a new business lead referral record submitted through the Partner Program.
     *
     * Used when a Partner Program member refers a new prospective client to WellnessLiving. Stores the
     * lead's contact details linked to the referring partner so that sales can follow up and attribute
     * the conversion to the correct partner.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Business/Lead/BusinessLead.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business_partner' => $this->k_business_partner,
            'text_business_name' => $this->text_business_name,
            'text_client_name' => $this->text_client_name,
            'text_email' => $this->text_email,
            'text_phone' => $this->text_phone,
            'text_promo_code' => $this->text_promo_code,
            'url_website' => $this->url_website,
            ],
            static fn($v) => $v !== null
        );
    }
}
