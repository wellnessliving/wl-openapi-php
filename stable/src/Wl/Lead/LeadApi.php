<?php
namespace WlSdk\Wl\Lead;

use WlSdk\WlSdkClient;

/**
 * Gets information necessary to display "Lead capture" widget.
 */
class LeadApi
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
     * The key of business to which the new user must be captured.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the widget skin. If left empty, then the default skin is used.
This will be the Lead Capture widget skin with "Use this widget for the Add Lead form" selected.
If your business doesn't have a skin selected, this endpoint will default to the system-wide default,
which may lack fields your business requires when adding a lead or a client.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    /**
     * Whether it is possible to give free promotion when adding a user (only if free promotion is configured in the widget).
`true` or `null` if it is possible, `false` if not.
`null` used for backward compatibility.
     *
     * @var bool|null
     */
    public ?bool $can_use_free_purchase = null;

    /**
     * This will be `true` if the API is being used from the backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_field_data = null;

    /**
     * `true` if newly created lead should be automatically signed in, `false` otherwise.

Lead will not be signed in if:
- email is used already for another existing user;
- different user is signed in already (can be changed with `is_sing_in_force`).

If lead is not signed in, then `text_sign_in_error` will contain an error message.
     *
     * @var bool|null
     */
    public ?bool $is_sing_in = null;

    /**
     * `true` if newly created lead should be automatically signed in instead of the currently signed-in user,
`false` if currently singed-in user should not be signed out.
If lead is not signed in, then `text_sign_in_error` will contain an error message.
     *
     * @var bool|null
     */
    public ?bool $is_sing_in_force = null;

    /**
     * Key of the lead source.

Must be `null` if `text_lead_source` is set.
If both parameters are empty, the [ModeSid::API](#/components/schemas/Wl.Mode.ModeSid) lead source will be used.

`LEAD_SOURCE_REPLACE_NONE` if Lead Source is to be unselected for the user.
     *
     * @var string|null
     */
    public ?string $k_lead_source = null;

    /**
     * The characters entered by the lead for the captcha test.
This isn't necessary if the GET method returned an empty `url_captcha`.
This field isn't necessary if the GET method returned an empty `url_captcha`.
     *
     * @var string|null
     */
    public ?string $s_captcha = null;

    /**
     * Lead source title.

A new lead source will be created if it does not exist.
Must be `null` if `k_lead_source` is set.
If both parameters are empty, the [ModeSid::API](#/components/schemas/Wl.Mode.ModeSid) lead source will be used.
     *
     * @var string|null
     */
    public ?string $text_lead_source = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information necessary to display "Lead capture" widget.
     *
     * Returns the list of profile fields configured for the widget, skin styling data, captcha URL if required,
     * and whether a free promotion can be applied when a new lead is created.
     *
     * @return array Parsed JSON response data.
     *   - array[] a_field_list: No description.
     *   - array[] a_skin: No description.
     *   - bool can_use_free_purchase: Whether it is possible to give free promotion when adding a user (only if free promotion is configured in the widget).
`true` or `null` if it is possible, `false` if not.
`null` used for backward compatibility.
     *   - string url_captcha: The URL to load the image with a captcha test.
This string is empty if it's not necessary to pass a captcha test.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Lead/Lead.json', $this->params(), 'GET');
    }

    /**
     * Saves new user via "Lead capture".
     *
     * Creates a new user account from the submitted lead capture form data, optionally signs in the new user,
     * and associates the lead with a lead source. Returns an error code in `text_sign_in_error` if sign-in was
     * requested but could not be completed.
     *
     * @return array Parsed JSON response data.
     *   - string k_lead_source: Key of the lead source.

Must be `null` if `text_lead_source` is set.
If both parameters are empty, the [ModeSid::API](#/components/schemas/Wl.Mode.ModeSid) lead source will be used.

`LEAD_SOURCE_REPLACE_NONE` if Lead Source is to be unselected for the user.
     *   - string text_sign_in_error: An error code if the lead is not signed in after creation.
This field is filled in the POST method.

Possible values:
- `email-exists` - the email is already used by another lead;
- `different-user` - another user is signed in already.
     *   - string uid: The key of the new user.

Typing is not added because the variable is an integer.
Specifying typing may break third party integration.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Lead/Lead.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_business' => $this->k_business,
            'k_skin' => $this->k_skin,
            'can_use_free_purchase' => $this->can_use_free_purchase,
            'is_backend' => $this->is_backend,
            'a_field_data' => $this->a_field_data,
            'is_sing_in' => $this->is_sing_in,
            'is_sing_in_force' => $this->is_sing_in_force,
            'k_lead_source' => $this->k_lead_source,
            's_captcha' => $this->s_captcha,
            'text_lead_source' => $this->text_lead_source,
            ],
            static fn($v) => $v !== null
        );
    }
}
