<?php

namespace WlSdk\Wl\Reception\Roster;

/**
 * Response from GET
 */
class AttendanceConfirmationScreenGetResponse
{
    /**
     * Data about a login logo.
     *
     * @var AttendanceConfirmationScreenGetResponsePhoto|null
     */
    public ?AttendanceConfirmationScreenGetResponsePhoto $a_photo = null;

    /**
     * Data of the visit.
     *
     * @var AttendanceConfirmationScreenGetResponseVisit|null
     */
    public ?AttendanceConfirmationScreenGetResponseVisit $a_visit = null;

    /**
     * Status of the operation.
     *
     * @var string|null
     */
    public ?string $s_status = null;

    /**
     * The class title.
     *
     * @var string|null
     */
    public ?string $text_class = null;

    /**
     * User's member ID. Copy of RsLoginMemberSql.`s_member`.
     *
     * @var string|null
     */
    public ?string $text_member = null;

    /**
     * The staff member's full name.
     *
     * @var string|null
     */
    public ?string $text_staff_name = null;

    /**
     * Class session time in user-friendly format.
     *
     * @var string|null
     */
    public ?string $text_time = null;

    /**
     * Full name of the user.
     *
     * @var string|null
     */
    public ?string $text_user = null;

    public function __construct(array $data)
    {
        $this->a_photo = isset($data['a_photo']) ? new AttendanceConfirmationScreenGetResponsePhoto((array)$data['a_photo']) : null;
        $this->a_visit = isset($data['a_visit']) ? new AttendanceConfirmationScreenGetResponseVisit((array)$data['a_visit']) : null;
        $this->s_status = isset($data['s_status']) ? (string)$data['s_status'] : null;
        $this->text_class = isset($data['text_class']) ? (string)$data['text_class'] : null;
        $this->text_member = isset($data['text_member']) ? (string)$data['text_member'] : null;
        $this->text_staff_name = isset($data['text_staff_name']) ? (string)$data['text_staff_name'] : null;
        $this->text_time = isset($data['text_time']) ? (string)$data['text_time'] : null;
        $this->text_user = isset($data['text_user']) ? (string)$data['text_user'] : null;
    }
}
