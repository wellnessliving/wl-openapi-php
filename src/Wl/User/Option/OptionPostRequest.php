<?php

namespace WlSdk\Wl\User\Option;

class OptionPostRequest
{
    /**
     * Option ID.
     *
     * @var int|null
     * @see \WlSdk\Wl\User\Option\OptionSid
     */
    public ?int $id_option = null;

    /**
     * User key for which option value is updated. Primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Option value.
     *
     * @var string|null
     */
    public ?string $s_value = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_option' => $this->id_option,
            'uid' => $this->uid,
            's_value' => $this->s_value,
            ],
            static fn ($v) => $v !== null
        );
    }
}
