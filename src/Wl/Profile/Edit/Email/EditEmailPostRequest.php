<?php
namespace WlSdk\Wl\Profile\Edit\Email;

class EditEmailPostRequest
{
    /**
     * The business key where the check must be performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of user whose email will be edited.
     * This will be `0` in the case of a new user creation.
     *
     * @var string|null
     */
    public ?string $uid_want = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_want' => $this->uid_want,
            ],
            static fn($v) => $v !== null
        );
    }
}
