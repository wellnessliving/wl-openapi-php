<?php

namespace WlSdk\Wl\Login\Rank;

class LoginRankListGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class key.
     * Used to filter the list of ranks by their visit conditions.
     *
     * `null` if no need to filter by class.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * UIDs of users encoded by Javascript analogue of the UrlEncode::encode() method.
     *
     * @var string|null
     */
    public ?string $s_user_key = null;

    /**
     * Users with rank categories encoded by Javascript analogue of the UrlEncode::encode()
     * method. This logic was selected, because there is a possibility to promote belts of too many users. In this
     * case
     * URI is too long.
     *
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $s_user_rank_category = null;

    /**
     * Whether need to return user detail information (mail, phone).
     *
     * @var bool|null
     */
    public ?bool $show_user_detail = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            's_user_key' => $this->s_user_key,
            's_user_rank_category' => $this->s_user_rank_category,
            'show_user_detail' => $this->show_user_detail,
            ],
            static fn ($v) => $v !== null
        );
    }
}
