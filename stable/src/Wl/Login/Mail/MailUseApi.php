<?php
namespace WlSdk\Wl\Login\Mail;

use WlSdk\WlSdkClient;

/**
 * Checks if specified user exists in specified business.
 */
class MailUseApi
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
     * The business for which the email address search is being performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The email address to check for.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if specified user exists in specified business.
     *
     * Accepts a business key and an email address, validates both, and returns `true` if a user with that email is
     * an
     * active member of the business. Requests are rate-limited per IP unless the caller has the required
     * privilege.
     *
     * @return array Parsed JSON response data.
     *   - bool is_exists: If `true`, the user with the specified email address exists in specified business. Otherwise, this will
be `false`.
     *   - string uid_use: Key of the user who using email within the business.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Mail/MailUse.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            ],
            static fn($v) => $v !== null
        );
    }
}
