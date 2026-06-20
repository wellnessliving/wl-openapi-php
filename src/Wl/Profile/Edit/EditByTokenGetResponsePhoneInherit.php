<?php

namespace WlSdk\Wl\Profile\Edit;

class EditByTokenGetResponsePhoneInherit
{
    /**
     * Indicates weather to inherit phone numbers from relative or not. `1` if phone inheritance is needed, '0'
     * otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_phone_inherit = null;

    /**
     * Relative's name.
     *
     * @var string|null
     */
    public ?string $text_relative = null;

    /**
     * User key of relative.
     *
     * @var string|null
     */
    public ?string $uid_relative = null;

    public function __construct(array $data)
    {
        $this->is_phone_inherit = isset($data['is_phone_inherit']) ? (bool)$data['is_phone_inherit'] : null;
        $this->text_relative = isset($data['text_relative']) ? (string)$data['text_relative'] : null;
        $this->uid_relative = isset($data['uid_relative']) ? (string)$data['uid_relative'] : null;
    }
}
