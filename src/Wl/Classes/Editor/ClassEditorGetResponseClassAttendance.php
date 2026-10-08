<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseClassAttendance
{
    /**
     * Book-a-Spot asset categories the class requires.
     *
     * Only taken into account while `is_resource_type` is `true`.
     *
     * @var ClassEditorGetResponseClassAttendanceResourceType|null
     */
    public ?ClassEditorGetResponseClassAttendanceResourceType $a_resource_type = null;

    /**
     * Maximum number of make-up sessions a client may take.
     *
     * `0` stands for as many as the number of the sessions the client missed. Only taken into account while
     * `is_replace` is `true`.
     *
     * @var int|null
     */
    public ?int $i_makeup_cap = null;

    /**
     * `true` if a client must attend other services before booking this one, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_prerequisite = null;

    /**
     * `true` if staff may sell products from the attendance list of the class, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_quick_buy = null;

    /**
     * `true` if the number of the make-up sessions of the class is limited, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_replace = null;

    /**
     * `true` if the class requires Book-a-Spot assets, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_resource_type = null;

    /**
     * `true` if staff may book individual sessions of a block event, `false` otherwise.
     *
     * Ignored for a class, and for a non-block or a ticketed event.
     *
     * @var bool|null
     */
    public ?bool $is_staff_session = null;

    public function __construct(array $data)
    {
        $this->a_resource_type = isset($data['a_resource_type']) ? new ClassEditorGetResponseClassAttendanceResourceType((array)$data['a_resource_type']) : null;
        $this->i_makeup_cap = isset($data['i_makeup_cap']) ? (int)$data['i_makeup_cap'] : null;
        $this->is_prerequisite = isset($data['is_prerequisite']) ? (bool)$data['is_prerequisite'] : null;
        $this->is_quick_buy = isset($data['is_quick_buy']) ? (bool)$data['is_quick_buy'] : null;
        $this->is_replace = isset($data['is_replace']) ? (bool)$data['is_replace'] : null;
        $this->is_resource_type = isset($data['is_resource_type']) ? (bool)$data['is_resource_type'] : null;
        $this->is_staff_session = isset($data['is_staff_session']) ? (bool)$data['is_staff_session'] : null;
    }
}
