<?php

namespace WlSdk\Wl\Profile\Visit;

class VisitPostRequest
{
    /**
     * UID of the user that is visited by current user.
     *
     * Primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid_profile = null;

    public function params(): array
    {
        return array_filter(
            [
            'uid_profile' => $this->uid_profile,
            ],
            static fn ($v) => $v !== null
        );
    }
}
