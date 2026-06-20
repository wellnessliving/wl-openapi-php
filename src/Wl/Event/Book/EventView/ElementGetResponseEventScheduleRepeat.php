<?php
namespace WlSdk\Wl\Event\Book\EventView;

class ElementGetResponseEventScheduleRepeat
{
    /**
     * Count of the periods which specified in `id_repeat`.
     *
     * @var int|null
     */
    public ?int $i_repeat = null;

    /**
     * Measuring unit of `i_repeat` (week, month, year). One of {@link \WlSdk\ADurationSid} constants.
     *
     * @var \WlSdk\ADurationSid|null
     */
    public ?\WlSdk\ADurationSid $id_repeat = null;

    public function __construct(array $data)
    {
        $this->i_repeat = isset($data['i_repeat']) ? (int)$data['i_repeat'] : null;
        $this->id_repeat = isset($data['id_repeat']) ? \WlSdk\ADurationSid::tryFrom((int)$data['id_repeat']) : null;
    }
}
