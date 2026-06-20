<?php
namespace WlSdk\Wl\Login\Member;

class MemberGetRequest
{
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
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
