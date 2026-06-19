<?php
namespace WlSdk\Wl\Staff;

use WlSdk\WlSdkClient;

/**
 * Update or create staff.
 */
class StaffElementApi
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
     * The key of the staff member resolved and used internally by this API.

This property is populated from `uid_staff` in `post()` and
returned in API result for compatibility.

Passing `k_staff` in request payload is not supported and causes an error.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * The list of locations where the staff member works.

`null` means to not change the current value of the field.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Employment end date.

`null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Employment start date.

`null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Gender of staff member. One of [AGenderSid](#/components/schemas/AGenderSid) constants.

`null` means to not change the current value of the field or set gender by default for new staff.
     *
     * @var int|null
     */
    public ?int $id_gender = null;

    /**
     * ID of the default system role. One of [RsPrivilegeRoleSid](#/components/schemas/RsPrivilegeRoleSid).

`null` means to not change the current value of the field.
     *
     * @var int|null
     */
    public ?int $id_role = null;

    /**
     * Whether the staff is currently employed.

`null` means to not change the current value of the field.
     *
     * @var bool|null
     */
    public ?bool $is_employ = null;

    /**
     * Determines whether the staff member be shown on the directory site of the business.

If `null`, the current value of the field shouldn't be changed.
     *
     * @var bool|null
     */
    public ?bool $is_microsite = null;

    /**
     * Whether password set is disabled. `true` - if the email is associated to a client profile which has a password set,
  `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_password_set_disable = null;

    /**
     * Whether the staff member can to sign in.
     *
     * @var bool|null
     */
    public ?bool $is_uid = null;

    /**
     * The key of the business in which the staff member is being created or edited.
This field is required.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business role key.

`null` if not set.
     *
     * @var string|null
     */
    public ?string $k_business_role = null;

    /**
     * City key.

`null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    /**
     * Home location key.

`null` if not set.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Address.

`null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * Staff biography.

`null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $text_biography = null;

    /**
     * Custom city title.

`null` means to not change the current value of the field or `k_city` is specified.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * The staff member's email address.
This field is required when creating a new staff member.

If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    /**
     * The staff member's first name.
This field is required when creating a new staff member.

If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_first_name = null;

    /**
     * The staff member's last name.

If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_last_name = null;

    /**
     * The password.
This field is required when creating a new staff member.

If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_password = null;

    /**
     * Confirmation of the password.
This field is required when creating a new staff member.

If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_password_confirm = null;

    /**
     * Home phone.

`null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $text_phone_home = null;

    /**
     * Cell phone.

`null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $text_phone_mobile = null;

    /**
     * The staff member's job title.

If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_position = null;

    /**
     * The staff member's job title.

If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * User key of a staff member.

This is the supported request identifier for staff update operations.
Value is normalized into `k_staff` in `post()`.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Update or create staff.
     *
     * Creates a new staff member or updates an existing one in the business. When creating,
     * a new user account is provisioned if no matching email exists. When updating, the target
     * staff member must already belong to the business. Role, location, contact details,
     * employment dates, and custom profile fields can all be set in a single call.
     *
     * @return array Parsed JSON response data.
     *   - string k_staff: The key of the staff member resolved and used internally by this API.

This property is populated from `uid_staff` in `post()` and
returned in API result for compatibility.

Passing `k_staff` in request payload is not supported and causes an error.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Staff/StaffElement.json', $this->params(), 'POST');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
            'k_staff' => $this->k_staff,
            'a_location' => $this->a_location,
            'dl_end' => $this->dl_end,
            'dl_start' => $this->dl_start,
            'id_gender' => $this->id_gender,
            'id_role' => $this->id_role,
            'is_employ' => $this->is_employ,
            'is_microsite' => $this->is_microsite,
            'is_password_set_disable' => $this->is_password_set_disable,
            'is_uid' => $this->is_uid,
            'k_business' => $this->k_business,
            'k_business_role' => $this->k_business_role,
            'k_city' => $this->k_city,
            'k_location' => $this->k_location,
            'text_address' => $this->text_address,
            'text_biography' => $this->text_biography,
            'text_city' => $this->text_city,
            'text_email' => $this->text_email,
            'text_first_name' => $this->text_first_name,
            'text_last_name' => $this->text_last_name,
            'text_password' => $this->text_password,
            'text_password_confirm' => $this->text_password_confirm,
            'text_phone_home' => $this->text_phone_home,
            'text_phone_mobile' => $this->text_phone_mobile,
            'text_position' => $this->text_position,
            'text_postal' => $this->text_postal,
            'uid_staff' => $this->uid_staff,
            ],
            static fn($v) => $v !== null
        );
    }
}
