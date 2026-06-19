<?php
namespace WlSdk\Wl\Login;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user.
 */
class LoginApi
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
     * The height of the requested photo.
     *
     * @var int|null
     */
    public ?int $i_photo_height = null;

    /**
     * The width of the requested photo.
     *
     * @var int|null
     */
    public ?int $i_photo_width = null;

    /**
     * The key of the business. Users can be in multiple businesses.
This can be left as `null` to retrieve system-wide information.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user.

`null` on case when is walk-in client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * List of users to get information for serialized as JSON string.

`null` for mode of single user.
     *
     * @var string|null
     */
    public ?string $text_uid = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about user.
     *
     * Returns name, gender, photo URL, email, and staff details for the specified user within the given business.
     * Public staff information is returned even without profile access; full client details require access to the
     * user's profile.
     *
     * @return array Parsed JSON response data.
     *   - bool can_postcard: Whether this user can send postcards.
     *   - bool can_send_message: Whether this user can send SMS. If `true` - user can send SMS, otherwise - `false`.
     *   - int id_gender: The gender ID. It will be one of the [AGenderSid](#/components/schemas/AGenderSid) constants.
     *   - bool is_photo_empty: Whether photo is uploaded.
`true` if photo is not uploaded, `false` otherwise.
     *   - string k_staff: The user's staff key for the specified business.
     *   - string s_first_name: The first name of the user.
     *   - string s_last_name: The surname of the user.
     *   - string text_mail_client: The client`s mailing address.
     *   - string text_mail_staff: The staff member's mailing address.
This will be set if the user is a staff member (`k_staff`).
     *   - string text_name_first_staff: The staff member's first name.
This will be set if the user is a staff member (`k_staff`).
     *   - string text_name_full_client: The user's login name. This is returned in cases when neither the first name nor the last name have been specified.
An empty string is returned in cases where neither the first name, last name, nor login have been specified.
     *   - string text_name_full_staff: The staff member's full name.
The user login is returned in cases where neither the first name nor the last name have been specified.
An empty string is returned in cases where neither the first name, last name, nor login have been specified.
This will be set if the user is a staff member (`k_staff`).
     *   - string text_name_last_staff: The staff member's last name.
This will be set if the user is a staff member (`k_staff`).
     *   - string uid: The key of the user.

`null` on case when is walk-in client.
     *   - string uid_staff: The user's UID as a staff member for the specified business.
     *   - string url_photo: The URL where the user photo can be retrieved.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Login/Login.json', $this->params(), 'GET');
    }

    /**
     * Retrieves information about a list of users.
This is done via "post" method because only "post" allows large requests.
     *
     * Accepts a JSON-encoded array of user keys, validates each one, resolves staff and client roles, and returns
     * name, gender, photo URL, email, and staff details for every user in the list, respecting per-user profile
     * access
     * rules.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_login: No description.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Login/Login.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'i_photo_height' => $this->i_photo_height,
            'i_photo_width' => $this->i_photo_width,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'text_uid' => $this->text_uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
