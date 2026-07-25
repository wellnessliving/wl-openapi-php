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
            ],
            static fn ($v) => $v !== null
        );
    }
}
