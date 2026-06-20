<?php

namespace WlSdk\Wl\User\Info;

class UserInfoGetRequest
{
    /**
     * A list of user keys.
     *
     * @var string[]|null
     */
    public ?array $a_user_list = null;

    /**
     * The key of the business.
     * This may be empty if system-wide information is needed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * `true` to ignore cache and load information from the database directly.
     * `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $not_cached = null;

    /**
     * The key of the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_user_list' => $this->a_user_list,
            'k_business' => $this->k_business,
            'not_cached' => $this->not_cached,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
