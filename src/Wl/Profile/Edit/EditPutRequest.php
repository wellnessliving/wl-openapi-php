<?php
namespace WlSdk\Wl\Profile\Edit;

class EditPutRequest
{
    /**
     * Registration source ID.
     * One of [RegisterSourceSid](#/components/schemas/Wl.Profile.RegisterSourceSid) constants.
     * 
     * Used only to register new clients.
     * * If the client is already authorized, the field value will not be used.
     * * If the client is not authorized and no value is set,
     * [RegisterSourceSid::SELF](#/components/schemas/Wl.Profile.RegisterSourceSid) will be used.
     *
     * @var int|null
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
     * The key of the user to edit.
     * 
     * If empty, an empty form will be displayed to add a new user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * UID of the user, whose address was inherited by the existing client we want to add.
     * Empty if non-existent user is being added or user to add is the one, whose address is inherited.
     * `null` If the address is not inherited.
     *
     * @var string|null
     */
    public ?string $uid_inherit_address = null;

    /**
     * A list of fields to change. Values are the new field values. Specific values depend on an individual field
     * type.
     * Some fields may be strings while others are arrays. If a composite field is changed, all fields should be
     * specified
     * (for example, if you change your address, you'll need to specify the city). Keys are the `k_field` values.
     *
     * @var array|null
     */
    public ?array $a_change = null;

    /**
     * List of intent identifiers. Each element is one of
     * [MemberIntentsSid](#/components/schemas/Wl.Login.Member.Intents.MemberIntentsSid) constants.
     * 
     * Available only for leads added by CAASI agent.
     *
     * @var int[]|null
     */
    public ?array $a_intents = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_phone_inherit = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_register_source' => $this->id_register_source,
            'is_address_inherit' => $this->is_address_inherit,
            'is_staff' => $this->is_staff,
            'k_business' => $this->k_business,
            'k_lead_source' => $this->k_lead_source,
            'uid' => $this->uid,
            'uid_inherit_address' => $this->uid_inherit_address,
            'a_change' => $this->a_change,
            'a_intents' => $this->a_intents,
            'a_phone_inherit' => $this->a_phone_inherit,
            ],
            static fn($v) => $v !== null
        );
    }
}
