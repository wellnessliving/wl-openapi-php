<?php
namespace WlSdk\Wl\Profile\Activity;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about activity item.
 */
class ElementApi
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
     * The key of the activity item represented by this endpoint.
     *
     * @var string|null
     */
    public ?string $k_login_activity = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about activity item.
     *
     * Loads a single activity record by `k_login_activity`, validates access via profile privileges,
     *  and returns the activity message, icon, type, reward and credit scores, activity dates in UTC
     *  and local time, spend amount, and a share URL.
     *
     * @return array Parsed JSON response data.
     *   - string[] a_credit_score: Messages with description what did user do to get account credits as reward points.
     *   - string[] a_reward_score: Messages with description what did user do to get points.
     *   - bool can_profile: Verifies that current user can view the specified profile.
     *   - string dt_date_gmt: The date of the activity in GMT.
     *   - string dt_date_local: The date of the activity in the client's time zone.
     *   - string html_message: Description of the action, who and what did.
     *   - int i_credit_score: Total amount of account credits user got for `k_login_activity`.
     *   - int i_score: The total amount of rewards points the client received for the activity.
     *   - int i_spend: The rewards points used to redeem a prize.
     *   - int id_icon: The ID of the icon that should be shown for this activity. One of [IconSid](#/components/schemas/Wl.Design.IconSid) constants.

This will be `null` is no special icon for this activity.
     *   - int id_type: The ID of the activity item returned by this endpoint. One of [RsLoginActivityTypeSid](#/components/schemas/RsLoginActivityTypeSid) constants.
     *   - string k_id: Object ID, for example, class period ID for books and visits.
     *   - string s_message: The description of the activity. This should include the nature of the activity and the people involved.
     *   - string url_link: Link to share activity with social networks.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Profile/Activity/Element.json', $this->params(), 'GET');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_login_activity' => $this->k_login_activity,
            ],
            static fn($v) => $v !== null
        );
    }
}
