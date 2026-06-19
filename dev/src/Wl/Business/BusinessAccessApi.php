<?php
namespace WlSdk\Wl\Business;

use WlSdk\WlSdkClient;

/**
 * Gets information about businesses where given user is a staff member.
 */
class BusinessAccessApi
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
     * This will be `true` if the API is being used from the backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The staff member's Facebook ID. This won't be empty if the staff member is logging in with Facebook.
This will be empty if the UID is already known or the staff member is logging in another way.
     *
     * @var string|null
     */
    public ?string $s_facebook_id = null;

    /**
     * The staff member's Microsoft key.
This won't be empty if the staff member is logging in with Microsoft.
     *
     * @var string|null
     */
    public ?string $s_microsoft_id = null;

    /**
     * The staff member's Apple authorization code. This won't be empty if the staff member is logging in with Apple.
This will be empty if the UID is already known or the staff member is logging in another way.
     *
     * @var string|null
     */
    public ?string $text_authorization_apple = null;

    /**
     * The Google Plus user ID. This won't be empty if the staff member is logging in with Google.
This will be empty if the UID is already known or the staff member is logging in another way.
     *
     * @var string|null
     */
    public ?string $text_google_plus = null;

    /**
     * The staff member's email to determine their UID. This won't be empty if the staff member is logging in with email or with Google.
This will be empty if the UID is already known or the staff member is logging in another way.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * User key. Empty if user is not logged in, but their authorization data is known.
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
     * Gets information about businesses where given user is a staff member.
     *
     * Used during staff login to determine which businesses the user can access. Accepts identity via UID
     * or any supported social login identifier, then returns the matching list of businesses to display
     * on the business selection screen. In backend mode, franchisee locations and IP access restrictions
     * are also evaluated.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_business: The businesses the staff member belongs to.
Note that this field is here for backwards compatibility.
     *   - array[] a_business_data: No description.
     *   - string uid_mail: The staff member key, determined by their email. This will be empty if the UID isn't empty.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Business/BusinessAccess.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'is_backend' => $this->is_backend,
            's_facebook_id' => $this->s_facebook_id,
            's_microsoft_id' => $this->s_microsoft_id,
            'text_authorization_apple' => $this->text_authorization_apple,
            'text_google_plus' => $this->text_google_plus,
            'text_mail' => $this->text_mail,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
