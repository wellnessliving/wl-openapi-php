<?php
namespace WlSdk\Wl\Profile\Edit\Email;

class EditEmail67GetRequest
{
    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The business key where the check must be performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The email address to be checked.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

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
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'text_mail' => $this->text_mail,
            'uid_want' => $this->uid_want,
            ],
            static fn($v) => $v !== null
        );
    }
}
