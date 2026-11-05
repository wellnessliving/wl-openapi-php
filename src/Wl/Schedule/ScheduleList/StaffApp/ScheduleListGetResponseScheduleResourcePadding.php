<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp;

class ScheduleListGetResponseScheduleResourcePadding
{
    /**
     * Padding after each booking of the asset, in minutes. `0` if the asset has no padding after.
     *
     * @var int|null
     */
    public ?int $i_padding_after = null;

    /**
     * Padding before each booking of the asset, in minutes. `0` if the asset has no padding before.
     *
     * @var int|null
     */
    public ?int $i_padding_before = null;

    public function __construct(array $data)
    {
        $this->i_padding_after = isset($data['i_padding_after']) ? (int)$data['i_padding_after'] : null;
        $this->i_padding_before = isset($data['i_padding_before']) ? (int)$data['i_padding_before'] : null;
    }
}
