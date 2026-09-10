<?php

namespace WlSdk\Wl\Login\Rank;

class LoginRankListGetResponseUserListRankCategoryCurrent
{
    /**
     * Rank logo thumbnail data:
     *
     * @var LoginRankListGetResponseUserListRankCategoryCurrentLogo|null
     */
    public ?LoginRankListGetResponseUserListRankCategoryCurrentLogo $a_logo = null;

    /**
     * Login rank key. Primary key from  table.
     *
     * @var string|null
     */
    public ?string $k_login_rank = null;

    /**
     * Rank key. Primary key from  table.
     *
     * @var string|null
     */
    public ?string $k_rank = null;

    /**
     * Class attendance in the current rank.
     *
     * @var string|null
     */
    public ?string $text_attendance_at_rank = null;

    /**
     * Belt promotion date.
     *
     * @var string|null
     */
    public ?string $text_promote_date = null;

    /**
     * Rank title.
     *
     * @var string|null
     */
    public ?string $text_rank = null;

    /**
     * Time at the current rank.
     *
     * @var string|null
     */
    public ?string $text_time_at_rank = null;

    public function __construct(array $data)
    {
        $this->a_logo = isset($data['a_logo']) ? new LoginRankListGetResponseUserListRankCategoryCurrentLogo((array)$data['a_logo']) : null;
        $this->k_login_rank = isset($data['k_login_rank']) ? (string)$data['k_login_rank'] : null;
        $this->k_rank = isset($data['k_rank']) ? (string)$data['k_rank'] : null;
        $this->text_attendance_at_rank = isset($data['text_attendance_at_rank']) ? (string)$data['text_attendance_at_rank'] : null;
        $this->text_promote_date = isset($data['text_promote_date']) ? (string)$data['text_promote_date'] : null;
        $this->text_rank = isset($data['text_rank']) ? (string)$data['text_rank'] : null;
        $this->text_time_at_rank = isset($data['text_time_at_rank']) ? (string)$data['text_time_at_rank'] : null;
    }
}
