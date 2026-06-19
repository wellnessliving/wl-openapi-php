<?php
namespace WlSdk\Wl\Profile\Edit;

/**
 * Response from GET
 */
class EditByTokenGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_error_list = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_phone_inherit = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_structure = null;

    /**
     * Whether current user can change password of the given user or not.
     * If client is part of multiple businesses, then staff of the business can only request reset of the password,
     * but cannot change it.
     *
     * @var bool|null
     */
    public ?bool $can_password_change = null;

    /**
     * `true` if the A2P 10DLC registration feature is enabled for this business, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_a2p = null;

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
     * Exception class name.
     * `null` if there was no mistake.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * Code of the error.
     * `null` if there was no mistake.
     *
     * @var string|null
     */
    public ?string $s_code = null;

    /**
     * Error message.
     * `null` if there was no mistake.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    /**
     * UID of the user, whose address was inherited by the existing client we want to add.
     * Empty if non-existent user is being added or user to add is the one, whose address is inherited.
     * `null` If the address is not inherited.
     *
     * @var string|null
     */
    public ?string $uid_inherit_address = null;

    public function __construct(array $data)
    {
        $this->a_error_list = isset($data['a_error_list']) ? (array)$data['a_error_list'] : null;
        $this->a_phone_inherit = isset($data['a_phone_inherit']) ? (array)$data['a_phone_inherit'] : null;
        $this->a_structure = isset($data['a_structure']) ? (array)$data['a_structure'] : null;
        $this->can_password_change = isset($data['can_password_change']) ? (bool)$data['can_password_change'] : null;
        $this->is_a2p = isset($data['is_a2p']) ? (bool)$data['is_a2p'] : null;
        $this->is_address_inherit = isset($data['is_address_inherit']) ? (bool)$data['is_address_inherit'] : null;
        $this->is_short = isset($data['is_short']) ? (bool)$data['is_short'] : null;
        $this->k_lead_source = isset($data['k_lead_source']) ? (string)$data['k_lead_source'] : null;
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->s_code = isset($data['s_code']) ? (string)$data['s_code'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
        $this->uid_inherit_address = isset($data['uid_inherit_address']) ? (string)$data['uid_inherit_address'] : null;
    }
}
