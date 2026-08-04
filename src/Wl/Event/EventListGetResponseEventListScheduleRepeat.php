<?php

namespace WlSdk\Wl\Event;

class EventListGetResponseEventListScheduleRepeat
{
    /**
     * Count of the periods which are specified in `id_repeat`.
     *
     * @var int|null
     */
    public ?int $i_repeat = null;

    /**
     * Measuring unit of `i_repeat` (week, month, year) from {@link \WlSdk\ADurationSid}.
     *
     * @var int|null
     * @see \WlSdk\ADurationSid
     */
    public ?int $id_repeat = null;

    public function __construct(array $data)
    {
        $this->i_repeat = isset($data['i_repeat']) ? (int)$data['i_repeat'] : null;
        $this->id_repeat = isset($data['id_repeat']) ? (int)$data['id_repeat'] : null;
    }
}
