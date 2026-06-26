<?php

namespace WlSdk\Wl\Profile\Rank;

class ProfileRankGetRequest
{
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
            'k_rank' => $this->k_rank,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
