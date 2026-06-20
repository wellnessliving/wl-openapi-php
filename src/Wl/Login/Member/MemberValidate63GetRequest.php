<?php

namespace WlSdk\Wl\Login\Member;

class MemberValidate63GetRequest
{
    /**
     * Key of the business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user's key.
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
