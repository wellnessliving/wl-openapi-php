<?php

namespace WlSdk\Wl\Login\Rank;

class LoginRankElementDeleteRequest
{
    /**
     * To delete entire rank category from this user.
     *
     * @var bool|null
     */
    public ?bool $is_rank_category = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login rank key. Primary key in RsLoginRankSql table.
     *
     * @var string|null
     */
    public ?string $k_login_rank = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_rank_category' => $this->is_rank_category,
            'k_business' => $this->k_business,
            'k_login_rank' => $this->k_login_rank,
            ],
            static fn ($v) => $v !== null
        );
    }
}
