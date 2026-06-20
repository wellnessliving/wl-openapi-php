<?php

namespace WlSdk\Wl\Schedule\ClassView;

class ClassViewPostResponseStaffLogo
{
    /**
     * ID of gender. One of {@link \WlSdk\Wl\Gender\GenderSid} constants.
     *
     * @var int|null
     */
    public ?int $id_gender = null;

    /**
     * `true` - staff has photo; `false` - has no photo.
     *
     * @var bool|null
     */
    public ?bool $is_empty = null;

    /**
     * URL to staff photo.
     *
     * @var string|null
     */
    public ?string $s_url = null;

    public function __construct(array $data)
    {
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->is_empty = isset($data['is_empty']) ? (bool)$data['is_empty'] : null;
        $this->s_url = isset($data['s_url']) ? (string)$data['s_url'] : null;
    }
}
