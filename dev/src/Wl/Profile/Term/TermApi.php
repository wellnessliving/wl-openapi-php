<?php
namespace WlSdk\Wl\Profile\Term;

use WlSdk\WlSdkClient;

/**
 * Returns online waiver information for the specified user and business.
 */
class TermApi
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
     * The key of the current business.
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
     * Returns online waiver information for the specified user and business.
     *
     * Returns the rendered online waiver text for the business along with the client's current
     *  agreement status. Used to display the waiver page and show whether the client has already
     *  signed, including their signature image and the confirmation timestamp.
     *
     * @return array Parsed JSON response data.
     *   - string dt_agree: The date/time of the waiver confirmation.
`null` if waiver is not confirmed.
     *   - string html_contract: The text of the online waiver.
     *   - int i_minor_age: Age of minor which documents can be signed by parent or legal guardian.
     *   - string ip_agree: The IP address from which the confirmation was carried out.
`null` if waiver is not confirmed.
     *   - bool is_agree: Flag of successful saving agreement.
`true` if agreement was sign up successful `false` - otherwise.
     *   - string s_name: The user's name.
     *   - string|bool url_signature: The URL to the image with the client's signature.
`false` if waiver is not confirmed.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Profile/Term/Term.json', $this->params(), 'GET');
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
