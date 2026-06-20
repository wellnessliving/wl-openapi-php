<?php
namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseScheduleRepeat
{
    /**
     * Count of the periods which specified in `id_repeat`.
     *
     * @var int|null
     */
    public ?int $i_repeat = null;

    /**
     * Measuring unit of `i_repeat` (week, month, year). One of [ADurationSid](#/components/schemas/ADurationSid)
     * constants.
     *
     * @var int|null
     */
    public ?int $id_repeat = null;

    public function __construct(array $data)
    {
        $this->i_repeat = isset($data['i_repeat']) ? (int)$data['i_repeat'] : null;
        $this->id_repeat = isset($data['id_repeat']) ? (int)$data['id_repeat'] : null;
    }
}
