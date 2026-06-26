<?php

namespace WlSdk\Wl\Business\Sms\Chat\Staff;

/**
 * Response from GET
 */
class SmsChatStaffAssignGetResponse
{
    /**
     * Array of staff available for assigned to chat of client.
     * Each element contains the following fields:
     * <ul>
     *   <li>string `uid_staff` Staff UID. Primary key in PassportLoginSql table.</li>
     *   <li>string `text_full_name` Staff member first and last name.</li>
     *   <li>string `url_image` Url staff member logo.</li>
     * </ul>
     *
     * @var array[]|null
     */
    public ?array $a_staff_available = null;

    /**
     * Can a current staff assign a conversation to a staff member.
     * `true` if enable the role to use the Assign to field, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_available_assign_to = null;

    /**
     * Staff name assigned to chat of client.
     *
     * @var string|null
     */
    public ?string $text_staff_name_assign = null;

    /**
     * User staff Key assigned to chat of client.
     * Primary key in PassportLoginSql table.
     * `null` if staff unassigned.
     *
     * @var string|null
     */
    public ?string $uid_staff_assign = null;

    /**
     * UID of the current staff member if there are on the list of available for assignment, `false` otherwise.
     *
     * @var string|null
     */
    public ?string $uid_staff_available_self = null;

    /**
     * Staff logo assigned to chat of client.
     *
     * @var string|null
     */
    public ?string $url_image_staff_assign = null;

    public function __construct(array $data)
    {
        $this->a_staff_available = isset($data['a_staff_available']) ? (array)$data['a_staff_available'] : null;
        $this->is_available_assign_to = isset($data['is_available_assign_to']) ? (bool)$data['is_available_assign_to'] : null;
        $this->text_staff_name_assign = isset($data['text_staff_name_assign']) ? (string)$data['text_staff_name_assign'] : null;
        $this->uid_staff_assign = isset($data['uid_staff_assign']) ? (string)$data['uid_staff_assign'] : null;
        $this->uid_staff_available_self = isset($data['uid_staff_available_self']) ? (string)$data['uid_staff_available_self'] : null;
        $this->url_image_staff_assign = isset($data['url_image_staff_assign']) ? (string)$data['url_image_staff_assign'] : null;
    }
}
