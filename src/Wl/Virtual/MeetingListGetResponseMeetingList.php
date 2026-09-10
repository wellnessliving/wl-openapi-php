<?php

namespace WlSdk\Wl\Virtual;

class MeetingListGetResponseMeetingList
{
    /**
     * Information about staff. Each element has next structure:
     *
     * @var MeetingListGetResponseMeetingListStaff|null
     */
    public ?MeetingListGetResponseMeetingListStaff $a_staff = null;

    /**
     * Name of the class or service.
     *
     * @var string|null
     */
    public ?string $text_service = null;

    /**
     * Date of the session.
     *
     * @var string|null
     */
    public ?string $text_date = null;

    /**
     * Time of the session.
     *
     * @var string|null
     */
    public ?string $text_time = null;

    /**
     * Meeting id.
     *
     * @var string|null
     */
    public ?string $s_meeting_id = null;

    public function __construct(array $data)
    {
        $this->a_staff = isset($data['a_staff']) ? new MeetingListGetResponseMeetingListStaff((array)$data['a_staff']) : null;
        $this->text_service = isset($data['text_service']) ? (string)$data['text_service'] : null;
        $this->text_date = isset($data['text_date']) ? (string)$data['text_date'] : null;
        $this->text_time = isset($data['text_time']) ? (string)$data['text_time'] : null;
        $this->s_meeting_id = isset($data['s_meeting_id']) ? (string)$data['s_meeting_id'] : null;
    }
}
