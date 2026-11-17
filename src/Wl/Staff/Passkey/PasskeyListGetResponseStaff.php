<?php

namespace WlSdk\Wl\Staff\Passkey;

class PasskeyListGetResponseStaff
{
    /**
     * Active passkeys of the staff member, in the order of creation:
     *
     * @var PasskeyListGetResponseStaffPasskey|null
     */
    public ?PasskeyListGetResponseStaffPasskey $a_passkey = null;

    /**
     * Whether the signed-in user may remove the passkeys of this staff member.
     * The same rule is applied by the removal itself.
     *
     * @var bool|null
     */
    public ?bool $can_remove = null;

    /**
     * Full name of the staff member.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Business role of the staff member, or an empty string if no role is assigned.
     *
     * @var string|null
     */
    public ?string $text_role = null;

    /**
     * Staff member key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_passkey = isset($data['a_passkey']) ? new PasskeyListGetResponseStaffPasskey((array)$data['a_passkey']) : null;
        $this->can_remove = isset($data['can_remove']) ? (bool)$data['can_remove'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_role = isset($data['text_role']) ? (string)$data['text_role'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
