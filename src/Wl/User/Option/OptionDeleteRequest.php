<?php

namespace WlSdk\Wl\User\Option;

class OptionDeleteRequest
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

    public function params(): array
    {
        return array_filter(
            [
            'id_option' => $this->id_option,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
