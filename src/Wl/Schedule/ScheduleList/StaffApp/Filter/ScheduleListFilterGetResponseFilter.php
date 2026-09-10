<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Filter;

class ScheduleListFilterGetResponseFilter
{
    /**
     * Configurations of filter chapters. If configuration of filter chapter is empty, there are no limits from
     * this chapter.
     *
     * @var ScheduleListFilterGetResponseFilterConfig|null
     */
    public ?ScheduleListFilterGetResponseFilterConfig $a_config = null;

    /**
     * `true` - filter may be changed by given user; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_edit = null;

    /**
     * `true` - filter is default for given user; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * `true` - filter is public; `false` - filter is private.
     *
     * @var bool|null
     */
    public ?bool $is_public = null;

    /**
     * Filter title.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    public function __construct(array $data)
    {
        $this->a_config = isset($data['a_config']) ? new ScheduleListFilterGetResponseFilterConfig((array)$data['a_config']) : null;
        $this->can_edit = isset($data['can_edit']) ? (bool)$data['can_edit'] : null;
        $this->is_default = isset($data['is_default']) ? (bool)$data['is_default'] : null;
        $this->is_public = isset($data['is_public']) ? (bool)$data['is_public'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
    }
}
