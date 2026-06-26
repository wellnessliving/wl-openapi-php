<?php

namespace WlSdk\Wl\Zoom\Recover;

class ZoomRecoverGetResponseMeetingList
{
    /**
     * `true` if this task to upload video to FitVID exists in the task queue, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_task_exist = null;

    /**
     * Key of the business for which meeting was created. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business_use = null;

    /**
     * Zoom meeting ID.
     *
     * @var string|null
     */
    public ?string $s_meeting_id = null;

    /**
     * Id of the recording.
     *
     * @var string|null
     */
    public ?string $s_recording_id = null;

    /**
     * Zoom meeting title.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Date of the session start in the given format in the region from LocaleConfig::id().
     *
     * @var string|null
     */
    public ?string $text_start = null;

    public function __construct(array $data)
    {
        $this->is_task_exist = isset($data['is_task_exist']) ? (bool)$data['is_task_exist'] : null;
        $this->k_business_use = isset($data['k_business_use']) ? (string)$data['k_business_use'] : null;
        $this->s_meeting_id = isset($data['s_meeting_id']) ? (string)$data['s_meeting_id'] : null;
        $this->s_recording_id = isset($data['s_recording_id']) ? (string)$data['s_recording_id'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_start = isset($data['text_start']) ? (string)$data['text_start'] : null;
    }
}
