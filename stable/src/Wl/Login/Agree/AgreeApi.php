<?php
namespace WlSdk\Wl\Login\Agree;

use WlSdk\WlSdkClient;

/**
 * Returns text of business liability release if business has liability release and if user did not agree to this
 * liability release.
 */
class AgreeApi
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
     * The key of business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user's key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * `false` if the user has not agreed to use Electronic Signatures,
`true` if the user has agreed to use Electronic Signatures,
`null` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * The base64-encoded user's signature image from the signature pad as a PNG file.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns text of business liability release if business has liability release and if user did not agree to this liability release.
     *
     * Accepts the business key and the user key, validates both, and returns the rendered HTML of the liability
     * release
     * contract if one is configured and the user has not yet agreed to it. If the user has already agreed, the
     * response
     * will have an empty `html_contract` field.
     *
     * @return array Parsed JSON response data.
     *   - string html_contract: Formatted text of business liability release. Not empty if the business has a liability release and if the user did not agree to this liability release.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Agree/Agree.json', $this->params(), 'GET');
    }

    /**
     * Saves the user's agreement to the online waiver.
     *
     * Accepts the user's base64-encoded signature image and an optional electronic-signature consent flag,
     * validates
     * both, records the agreement date and signature in the database, and sends a waiver confirmation
     * notification.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Login/Agree/Agree.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'is_agree' => $this->is_agree,
            's_signature' => $this->s_signature,
            ],
            static fn($v) => $v !== null
        );
    }
}
