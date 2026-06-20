<?php
namespace WlSdk\Wl\Profile\Edit;

class EditPasswordPostRequest
{
    /**
     * Checks if the current password is required or not to update the password.
     *
     * @var bool|null
     */
    public ?bool $is_old_password_required = null;

    /**
     * The key ID of business where actions take place.
     * Business is necessary for mail sending only.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The confirmation of new password.
     *
     * @var string|null
     */
    public ?string $s_password_confirm = null;

    /**
     * The new password.
     *
     * @var string|null
     */
    public ?string $s_password_new = null;

    /**
     * The old password.
     *
     * @var string|null
     */
    public ?string $s_password_old = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_old_password_required' => $this->is_old_password_required,
            'k_business' => $this->k_business,
            's_password_confirm' => $this->s_password_confirm,
            's_password_new' => $this->s_password_new,
            's_password_old' => $this->s_password_old,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
