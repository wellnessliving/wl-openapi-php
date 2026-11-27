<?php

namespace WlSdk\Wl\Login\Mail;

/**
 * Response from GET
 */
class MailUseGetResponse
{
    /**
     * If `true`, the user with the specified email address exists in specified business. Otherwise, this will
     * be `false`.
     *
     * `null` if {@link \WlSdk\Wl\Login\Mail\MailUse} is `true`.
     *
     * @var bool|null
     */
    public ?bool $is_exists = null;

    /**
     * Whether the email address is used by an account of `WellnessLiving` that is not a virtual user, in any
     * business
     * or in none.
     *
     * `true` if such an account exists, `false` otherwise. `null` if {@link \WlSdk\Wl\Login\Mail\MailUse} is
     * `false`.
     *
     * @var bool|null
     */
    public ?bool $is_use = null;

    /**
     * Key of the user who using email within the business.
     *
     *
     * `null` if the user is not found, if the current user can not see the profile of that user within the
     * business,
     * or if {@link \WlSdk\Wl\Login\Mail\MailUse} is `true`.
     *
     * @var string|null
     */
    public ?string $uid_use = null;

    public function __construct(array $data)
    {
        $this->is_exists = isset($data['is_exists']) ? (bool)$data['is_exists'] : null;
        $this->is_use = isset($data['is_use']) ? (bool)$data['is_use'] : null;
        $this->uid_use = isset($data['uid_use']) ? (string)$data['uid_use'] : null;
    }
}
