<?php

namespace WlSdk\Wl\Login\Location;

class LoginLocationGetRequest
{
    /**
     * Key of user to get data for.
     *
     * Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
