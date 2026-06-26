<?php

namespace WlSdk\Wl\Business\Sms\Chat\Staff;

/**
 * Response from GET
 */
class SmsChatStaffAssignListGetResponse
{
    /**
     * List of staff assign to chat of client.
     * Each element contains the following fields:
     *
     * @var SmsChatStaffAssignListGetResponseStaffAssign[]|null
     */
    public ?array $a_staff_assign = null;

    /**
     * Are there any chats that are unassigned to staff members.
     *
     * @var bool|null
     */
    public ?bool $has_unassigned = null;

    /**
     * The key of the current staff member if there are chats assigned to him, `null` otherwise.
     *
     * @var string|null
     */
    public ?string $uid_staff_assigned_self = null;

    public function __construct(array $data)
    {
        $this->a_staff_assign = isset($data['a_staff_assign']) ? array_map(static fn ($item) => new SmsChatStaffAssignListGetResponseStaffAssign((array)$item), (array)$data['a_staff_assign']) : null;
        $this->has_unassigned = isset($data['has_unassigned']) ? (bool)$data['has_unassigned'] : null;
        $this->uid_staff_assigned_self = isset($data['uid_staff_assigned_self']) ? (string)$data['uid_staff_assigned_self'] : null;
    }
}
