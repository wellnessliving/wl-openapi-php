<?php

namespace WlSdk\Wl\Profile\Rank;

class ProfileRankPostRequest
{
    /**
     * Promotion date on belts.
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $dtu_promotion_date = null;

    /**
     * Login rank key.
     * Can be empty. In this case a promotion date will be set for currently promoted belt and belts in all
     * franchisees
     * a belt was pushed to.
     *
     * @var string|null
     */
    public ?string $k_login_rank = null;

    /**
     * Rank key.
     *
     * @var string|null
     */
    public ?string $k_rank = null;

    /**
     * UID of user promotion date on belts of whom to be changed.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'dtu_promotion_date' => $this->dtu_promotion_date,
            'k_login_rank' => $this->k_login_rank,
            'k_rank' => $this->k_rank,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
