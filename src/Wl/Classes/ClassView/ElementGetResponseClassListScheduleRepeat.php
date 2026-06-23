<?php

namespace WlSdk\Wl\Classes\ClassView;

class ElementGetResponseClassListScheduleRepeat
{
    /**
     * A count of the periods specified in `id_repeat`.
     *
     * @var int|null
     */
    public ?int $i_repeat = null;

    /**
     * The measuring unit of `i_repeat`.
     * One of {@link \WlSdk\ADurationSid} constants.
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
