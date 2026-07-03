<?php

namespace WlSdk\Wl\Profile\Edit;

class EditPostRequest
{
    /**
     * ID of source mode. One of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * Registration source ID.
     * One of {@link \WlSdk\Wl\Profile\RegisterSourceSid} constants.
     *
     * Used only to register new clients.
     * * If the client is already authorized, the field value will not be used.
     * * If the client is not authorized and no value is set, {@link \WlSdk\Wl\Profile\RegisterSourceSid} will be
     * used.
     *
     * @var int|null
     * @see \WlSdk\Wl\Profile\RegisterSourceSid
     */
    public ?int $id_register_source = null;

    /**
     * Whether the address be inherited.
     * `true` if address inherit, `false` to remove inheritance.
     * `null` if not explicitly set (PUT only: preserves the current state).
     *
     * @var bool|null
     */
    public ?bool $is_address_inherit = null;

    /**
     * Indicates whether to display the full profile edit form or the short version.
     * This is assumed to be used only in user registration mode.
     *
     * @var bool|null
     */
    public ?bool $is_short = null;

    /**
     * Indicates whether to display the form as a user or as a staff member.
     * Staff members may have access to different fields than the user.
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    /**
     * The key of the business you're editing.
     *
     * An empty value will return the system-wide fields.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the lead source.
     *
     * `null` if not defined.
     *
     * When creating or editing a user:
     * `LEAD_SOURCE_REPLACE_NONE` if Lead Source is to be unselected for the user.
     *
     * @var string|null
     */
    public ?string $k_lead_source = null;

    /**
     * Compound key delimited with a colon. First part is the business key where the selected client exists.
     * Second part is the uid of the already existing user we want to add. Empty if a non-existent client is being
     * added.
     *
     * @var string|null
     */
    public ?string $text_business_uid_key = null;

    /**
     * The key of the user to edit.
     *
     * If empty, an empty form will be displayed to add a new user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The UID of an existing user in another business to add to the current business.
     *
     * @var string|null
     */
    public ?string $uid_existed = null;

    /**
     * UID of the user, whose address was inherited by the existing client we want to add.
     * Empty if non-existent user is being added or user to add is the one, whose address is inherited.
     * `null` If the address is not inherited.
     *
     * @var string|null
     */
    public ?string $uid_inherit_address = null;

    /**
     * UID of the user, whose email was inherited by the existing client we want to add.
     * Empty if non-existent user is being added or user to add is the one, whose email is inherited.
     *
     * @var string|null
     */
    public ?string $uid_relative_key = null;

    /**
     * Family relation data for the newly created user.
     * `null` if no family relation is required:
     *
     * @var array|null
     */
    public ?array $a_family_relation = null;

    /**
     * Information for user's photo.
     * It is necessary to save simultaneously user and photo in staff member mode.
     *
     * Attention!
     * Data from this field is taken directly from a POST somewhere in the depths of the photo upload.
     *
     * @var string|null
     */
    public ?string $a_image_upload = null;

    /**
     * List of intent identifiers. Each element is one of {@link \WlSdk\Wl\Login\Member\Intents\MemberIntentsSid}
     * constants.
     *
     * Available only for leads added by CAASI agent.
     *
     * @var int[]|null
     */
    public ?array $a_intents = null;

    /**
     * A copy of the [EditApi::$a_change](/Wl/Profile/Edit/Edit.json).
     * This is used for POST requests when creating a new user.
     *
     * @var array|null
     */
    public ?array $a_new = null;

    /**
     * An array contained with information about phone inheritance.
     * The array has the following structure:
     *
     * @var array|null
     */
    public ?array $a_phone_inherit = null;

    /**
     * `true` to throw an exception in a case of validation error; `false` to not throw.
     *
     * @var bool|null
     */
    public ?bool $is_exception_throw = null;

    /**
     * This will be `true` to sign in a created user. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_sing_in = null;

    /**
     * `true` - user agreed to receive marketing SMS;
     * `false` - otherwise.
     *
     * Only matters if [EditApi::$is_sms_subscription_presented](/Wl/Profile/Edit/Edit.json) is `true`.
     *
     * @var bool|null
     */
    public ?bool $is_sms_subscription_marketing = null;

    /**
     * `true` - user was shown checkboxes to subscribe to marketing and transactional sms messages.
     *   This means we need to modify his subscription based on the values in these fields.
     * `false` - otherwise. This means we should not change subscription settings.
     *
     * @var bool|null
     */
    public ?bool $is_sms_subscription_presented = null;

    /**
     * `true` - user agreed to receive transactional SMS;
     * `false` - otherwise.
     *
     * Only matters if [EditApi::$is_sms_subscription_presented](/Wl/Profile/Edit/Edit.json) is `true`.
     *
     * @var bool|null
     */
    public ?bool $is_sms_subscription_transactional = null;

    /**
     * The password to be set for a new user.
     *
     * @var string|null
     */
    public ?string $text_password = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mode' => $this->id_mode,
            'id_register_source' => $this->id_register_source,
            'is_address_inherit' => $this->is_address_inherit,
            'is_short' => $this->is_short,
            'is_staff' => $this->is_staff,
            'k_business' => $this->k_business,
            'k_lead_source' => $this->k_lead_source,
            'text_business_uid_key' => $this->text_business_uid_key,
            'uid' => $this->uid,
            'uid_existed' => $this->uid_existed,
            'uid_inherit_address' => $this->uid_inherit_address,
            'uid_relative_key' => $this->uid_relative_key,
            'a_family_relation' => $this->a_family_relation,
            'a_image_upload' => $this->a_image_upload,
            'a_intents' => $this->a_intents,
            'a_new' => $this->a_new,
            'a_phone_inherit' => $this->a_phone_inherit,
            'is_exception_throw' => $this->is_exception_throw,
            'is_sing_in' => $this->is_sing_in,
            'is_sms_subscription_marketing' => $this->is_sms_subscription_marketing,
            'is_sms_subscription_presented' => $this->is_sms_subscription_presented,
            'is_sms_subscription_transactional' => $this->is_sms_subscription_transactional,
            'text_password' => $this->text_password,
            ],
            static fn ($v) => $v !== null
        );
    }
}
