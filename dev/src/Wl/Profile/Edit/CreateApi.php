<?php
namespace WlSdk\Wl\Profile\Edit;

use WlSdk\WlSdkClient;

/**
 * Creates a new user.
 */
class CreateApi
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
     * The key of the business where you're creating new user.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * First name of the user.
     *
     * @var string|null
     */
    public ?string $text_firstname = null;

    /**
     * Last name of the user.
     *
     * @var string|null
     */
    public ?string $text_lastname = null;

    /**
     * Email of the user.
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
     * Creates a new user.
     *
     * Creates a new user account with the given email, first name, and last name in the specified
     *  business, registers the user as a member, and returns the `uid` of the created or existing
     *  user.
     *
     * @return array Parsed JSON response data.
     *   - string uid: The key of the user added.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Profile/Edit/Create.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'text_firstname' => $this->text_firstname,
            'text_lastname' => $this->text_lastname,
            'text_mail' => $this->text_mail,
            ],
            static fn($v) => $v !== null
        );
    }
}
