<?php

namespace WlSdk\Wl\Login\Rank;

class LoginRankListPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Users with rank categories and ranks that need to be saved encoded by Javascript analogue of the
     * UrlEncode::encode() method.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_user_rank_save = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_user_rank_save' => $this->s_user_rank_save,
            ],
            static fn ($v) => $v !== null
        );
    }
}
