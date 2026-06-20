<?php

namespace WlSdk\Wl\Login\Permission;

class PermissionPostRequest
{
    /**
     * The key of the purchased promotion.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * If `true`, the purchased promotion has been made auto-renewable. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_renew = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_login_promotion' => $this->k_login_promotion,
            'is_renew' => $this->is_renew,
            ],
            static fn ($v) => $v !== null
        );
    }
}
