<?php
namespace WlSdk\Wl\User\Info;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about user.
 */
class UserInfoApi
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
     * A list of user keys.
     *
     * @var string[]|null
     */
    public ?array $a_user_list = null;

    /**
     * The key of the business.
This may be empty if system-wide information is needed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * `true` to ignore cache and load information from the database directly.
`false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $not_cached = null;

    /**
     * The key of the user.
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
     * Retrieves information about user.
     *
     * Returns profile data for a WellnessLiving user, including name, email, phone, photo, gender,
     * login type, custom profile fields, member groups, and calendar integration status. Supports
     * single-user mode and batch mode for loading multiple profiles in one request.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_custom_field: No description.
     *   - string[] a_member_group: List of member groups that the user belongs to.
     *   - array[] a_photo: No description.
     *   - array[] a_result_list: No description.
     *   - bool can_introductory: Whether the user can purchase introductory offers.

`true` if user can purchase introductory offers, `false` otherwise.
     *   - string dt_add: The date the user was added, given in UTC time.
     *   - string dt_birth: The user's birthday. This will be `null` if the birthday isn't set yet.
     *   - bool has_discount: Whether client's login type has a discount.
`true` - login type has a discount, `false` - otherwise.

This will be `null` if a client has no assigned login type.
     *   - int id_gender: The ID of the user's gender. One of the [AGenderSid](#/components/schemas/AGenderSid) constants.

This will be `null` if the gender isn't set yet.
     *   - bool is_calendar_google: This will be `true` if the user has Google Calendar linked to their account; otherwise, `false`.
     *   - bool is_calendar_microsoft: This will be `true` if the user has Microsoft Calendar linked to their account; otherwise, `false`.
     *   - bool is_customer_new: This will be `true` if the user has never made purchases or reservations in this business.
Otherwise, this will be `false`.
     *   - bool is_traveller: This will be `true` if the user is a traveler. A traveler is someone whose home location isn't the current location
in the Enterprise business.
     *   - string k_city: City key.

`null` if "address" field is disabled in the business.
     *   - string k_login_type: The key of the login type. The login type describes the user's client type in this business.
     *   - string s_first_name: The user's first name.
     *   - string s_last_name: The user's last name.
     *   - string s_mail: The user's email address.
     *   - string s_member: The user's member ID in the business. Also referred to as the client ID in the client's profile. This value
is set by the business and separate from the `uid` value.
     *   - string s_phone: The user's phone number.
     *   - string s_phone_home: The user's home phone number.
     *   - string s_phone_work: The user's work phone number.
     *   - string text_address: Address inside a city.

`null` if "address" field is disabled in the business.
     *   - string text_city: City name.

`null` if "address" field is disabled in the business.
     *   - string text_login_type: Login type title.
Empty if a client has no client type assigned.
     *   - string text_postal: Postal code.

`null` if "address" field is disabled in the business.
     *   - string uid: The key of the user.
     *   - string url_photo: The URL for the user's photo.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/User/Info/UserInfo.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_user_list' => $this->a_user_list,
            'k_business' => $this->k_business,
            'not_cached' => $this->not_cached,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
