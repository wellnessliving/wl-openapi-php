<?php

namespace WlSdk\Wl\Login\Member;

class MemberPostRequest
{
    /**
     * The user's key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Primary key of the business to add the user into.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'uid' => $this->uid,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
