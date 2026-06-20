<?php
namespace WlSdk\Wl\Login\Member;

class LoginMemberPostRequest
{
    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user's ID to get/set.
     *
     * @var string|null
     */
    public ?string $s_member = null;

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
            's_member' => $this->s_member,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
