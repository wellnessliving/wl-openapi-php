<?php

namespace WlSdk\Wl\Visit\Billing\Code;

class VisitBillingCodeAssignGetResponseHistory
{
    /**
     * Date and time of the change in UTC.
     *
     * @var string|null
     */
    public ?string $dtu_change = null;

    /**
     * `true` when the user who made the change was deleted. `false` for the codes applied by default, for a void,
     * and when `uid_staff` is set.
     *
     * @var bool|null
     */
    public ?bool $is_staff_delete = null;

    /**
     * What changed.
     *
     * @var string|null
     */
    public ?string $text_log = null;

    /**
     * Reason of the change the staff member gave. `null` if no reason was given.
     *
     * @var string|null
     */
    public ?string $text_reason = null;

    /**
     * Signature of the staff member who made the change. `null` if no signature was given, or if the business did
     * not require one.
     *
     * @var string|null
     */
    public ?string $text_signature = null;

    /**
     * Key of the staff member who made the change. `null` for the codes applied by default, for a void not made by
     * a user, and when the user was deleted (see `is_staff_delete`).
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    public function __construct(array $data)
    {
        $this->dtu_change = isset($data['dtu_change']) ? (string)$data['dtu_change'] : null;
        $this->is_staff_delete = isset($data['is_staff_delete']) ? (bool)$data['is_staff_delete'] : null;
        $this->text_log = isset($data['text_log']) ? (string)$data['text_log'] : null;
        $this->text_reason = isset($data['text_reason']) ? (string)$data['text_reason'] : null;
        $this->text_signature = isset($data['text_signature']) ? (string)$data['text_signature'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
    }
}
