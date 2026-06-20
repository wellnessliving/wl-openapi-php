<?php

namespace WlSdk\Wl\Location\Flag;

class FlagGetResponseFlag
{
    /**
     * Key is passport login ID.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Value: `true` if user is flagged; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_flag = null;

    public function __construct(array $data)
    {
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->is_flag = isset($data['is_flag']) ? (bool)$data['is_flag'] : null;
    }
}
