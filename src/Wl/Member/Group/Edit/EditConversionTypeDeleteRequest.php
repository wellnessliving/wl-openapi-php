<?php

namespace WlSdk\Wl\Member\Group\Edit;

class EditConversionTypeDeleteRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key. Primary key in PassportLoginSql table.
     *
     * Used to set lead conversion type for the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
