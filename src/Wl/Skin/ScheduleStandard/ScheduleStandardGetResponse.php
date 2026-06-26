<?php

namespace WlSdk\Wl\Skin\ScheduleStandard;

/**
 * Response from GET
 */
class ScheduleStandardGetResponse
{
    /**
     * Skin data.
     * Result of the RsSkinData::skin() method.
     *
     * @var array|null
     */
    public ?array $a_skin = null;

    public function __construct(array $data)
    {
        $this->a_skin = isset($data['a_skin']) ? (array)$data['a_skin'] : null;
    }
}
