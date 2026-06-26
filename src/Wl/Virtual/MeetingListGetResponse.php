<?php

namespace WlSdk\Wl\Virtual;

/**
 * Response from GET
 */
class MeetingListGetResponse
{
    /**
     * Active meeting list. Each element has next structure:
     *
     * @var MeetingListGetResponseMeetingList[]|null
     */
    public ?array $a_meeting_list = null;

    /**
     * `true` if can add FitLIVE licenses, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_add_license = null;

    /**
     * Number of paid FitLIVE licenses.
     *
     * @var int|null
     */
    public ?int $i_license = null;

    /**
     * `true` if business use FitLIVE, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_fitlive = null;

    public function __construct(array $data)
    {
        $this->a_meeting_list = isset($data['a_meeting_list']) ? array_map(static fn ($item) => new MeetingListGetResponseMeetingList((array)$item), (array)$data['a_meeting_list']) : null;
        $this->can_add_license = isset($data['can_add_license']) ? (bool)$data['can_add_license'] : null;
        $this->i_license = isset($data['i_license']) ? (int)$data['i_license'] : null;
        $this->is_fitlive = isset($data['is_fitlive']) ? (bool)$data['is_fitlive'] : null;
    }
}
