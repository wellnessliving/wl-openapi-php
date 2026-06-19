<?php
namespace WlSdk\Wl\Reception\Application;

use WlSdk\WlSdkClient;

/**
 * Returns member information and notification items for the Self Check-In Web App.
 */
class MemberInfoApi
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
     * Primary keys of users whose information must be returned.

`null` if data of a single user is requested.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * List of dates for load additional information about users.

Key is UID of user. Value is date.

`null` if data of a single user is requested.
     *
     * @var string[]|null
     */
    public ?array $a_uid_date = null;

    /**
     * Date of the session, if we show it on the appointment info window or on the attendance list.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * `true` - if API is being used from backend, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * If you need to return additional information set to `true` or `false` if not.
     *
     * @var bool|null
     */
    public ?bool $is_full = null;

    /**
     * The business ID required to access client information.

Specify this as `0` to retrieve the system-wide version of the information.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location where the Self Check-In Web App is running.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * ID of the visit, if we show icons on the attendance list and information that depends on visit is required.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Key of the Check In application.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * A list of icons with additional information about the business member.
If empty, all available icons will be displayed.
Comma separated values from [MemberInfoSid::idSid()](#/components/schemas/Wl.Member.Info.MemberInfoSid) method.
     *
     * @var string|null
     */
    public ?string $s_show = null;

    /**
     * ID of a user to retrieve member information for.
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
     * Returns member information and notification items for the Self Check-In Web App.
     *
     * Returns the user's profile data along with any notification items (such as expiring memberships, required
     * waivers,
     * or outstanding balances) that should be displayed during the self check-in flow.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_info: No description.
     *   - array[] a_items: No description.
     *   - array[] a_result_list: No description.
     *   - array[] a_visit_last: No description.
     *   - array[] a_visit_next: No description.
     *   - int i_lifetime_visit: Count attend visits for one client.
     *   - bool is_traveller: If `true`, the client is a traveler. Otherwise, this will be `false`.
This will be `null` in cases when the client is a walk-in. Or when `is_full` is `false`.
     *   - string m_lifetime_value: The member's lifetime value.
     *   - string s_member: The member ID.

If `null`, the specified client isn't a member of the specified business.
     *   - string text_first_name: First user's name.
     *   - string text_fullname: Full user's name.
     *   - string url_barcode: URL to barcode image.
     *   - string url_email: URL to email.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Reception/Application/MemberInfo.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'a_uid' => $this->a_uid,
            'a_uid_date' => $this->a_uid_date,
            'dt_date' => $this->dt_date,
            'is_backend' => $this->is_backend,
            'is_full' => $this->is_full,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_visit' => $this->k_visit,
            's_secret' => $this->s_secret,
            's_show' => $this->s_show,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
