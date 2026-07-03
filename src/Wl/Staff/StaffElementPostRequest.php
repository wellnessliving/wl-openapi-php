<?php

namespace WlSdk\Wl\Staff;

class StaffElementPostRequest
{
    /**
     * The key of the staff member resolved and used internally by this API.
     *
     * This property is populated from [StaffElementApi](/Wl/Staff/StaffElement.json) in `post()` and
     * returned in API result for compatibility.
     *
     * Passing `k_staff` in request payload is not supported and causes an error.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * The list of locations where the staff member works.
     *
     * `null` means to not change the current value of the field.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Employment end date.
     *
     * `null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $dl_end = null;

    /**
     * Employment start date.
     *
     * `null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $dl_start = null;

    /**
     * Gender of staff member. One of {@link \WlSdk\AGenderSid} constants.
     *
     * `null` means to not change the current value of the field or set gender by default for new staff.
     *
     * @var int|null
     * @see \WlSdk\AGenderSid
     */
    public ?int $id_gender = null;

    /**
     * ID of the default system role. One of {@link \WlSdk\RsPrivilegeRoleSid}.
     *
     * `null` means to not change the current value of the field.
     *
     * @var int|null
     * @see \WlSdk\RsPrivilegeRoleSid
     */
    public ?int $id_role = null;

    /**
     * Whether the staff is currently employed.
     *
     * `null` means to not change the current value of the field.
     *
     * @var bool|null
     */
    public ?bool $is_employ = null;

    /**
     * Determines whether the staff member be shown on the directory site of the business.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @var bool|null
     */
    public ?bool $is_microsite = null;

    /**
     * Whether password set is disabled. `true` - if the email is associated to a client profile which has a
     * password set,
     *   `false` - otherwise.
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
     * This field is required.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Business role key.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $k_business_role = null;

    /**
     * City key.
     *
     * `null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    /**
     * Home location key.
     *
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Address.
     *
     * `null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * Staff biography.
     *
     * `null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $text_biography = null;

    /**
     * Custom city title.
     *
     * `null` means to not change the current value of the field or `k_city` is specified.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * The staff member's email address.
     * This field is required when creating a new staff member.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    /**
     * The staff member's first name.
     * This field is required when creating a new staff member.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_first_name = null;

    /**
     * The staff member's last name.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_last_name = null;

    /**
     * The password.
     * This field is required when creating a new staff member.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_password = null;

    /**
     * Confirmation of the password.
     * This field is required when creating a new staff member.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_password_confirm = null;

    /**
     * Home phone.
     *
     * `null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $text_phone_home = null;

    /**
     * Cell phone.
     *
     * `null` means to not change the current value of the field.
     *
     * @var string|null
     */
    public ?string $text_phone_mobile = null;

    /**
     * The staff member's job title.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_position = null;

    /**
     * The staff member's job title.
     *
     * If `null`, the current value of the field shouldn't be changed.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * User key of a staff member.
     *
     * This is the supported request identifier for staff update operations.
     * Value is normalized into [StaffElementApi](/Wl/Staff/StaffElement.json) in `post()`.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function params(): array
    {
        return array_filter(
            [
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
            static fn ($v) => $v !== null
        );
    }
}
