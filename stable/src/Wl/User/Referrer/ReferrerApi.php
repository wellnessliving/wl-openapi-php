<?php
namespace WlSdk\Wl\User\Referrer;

use WlSdk\WlSdkClient;

/**
 * Searches for a referrer by the given search string and returns their profile information.
 */
class ReferrerApi
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
     * The string to be used for searching for a referrer.
     *
     * @var string|null
     */
    public ?string $s_search = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Searches for a referrer by the given search string and returns their profile information.
     *
     * Searches for a matching client by member ID, email address, phone number, or encrypted user
     * key, and returns their name, email, phone, and photo. Returns empty or `null` fields when
     * no matching client is found. Search is rate-limited for guest and client callers.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_photo: No description.
     *   - string s_email: The email address of the referrer.
     *   - string s_member: The business client ID of the referrer.
     *   - string s_name_first: The first name of the referrer.
     *   - string s_name_last: The last name of the referrer.
     *   - string s_phone: The phone number of the referrer.
     *   - string text_name_public: Composes name of the referrer for public usage.
`null` if the referrer is not found.
     *   - string uid_referrer: The referrer's user key.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/User/Referrer/Referrer.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            's_search' => $this->s_search,
            ],
            static fn($v) => $v !== null
        );
    }
}
