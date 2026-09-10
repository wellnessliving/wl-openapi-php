<?php

namespace WlSdk\Wl\Login\Rank;

class LoginRankListGetResponseUserListRankCategory
{
    /**
     * List of ranks available for the category. Each element:
     *
     * @var LoginRankListGetResponseUserListRankCategoryAvailable|null
     */
    public ?LoginRankListGetResponseUserListRankCategoryAvailable $a_available = null;

    /**
     * Data of the user's current rank in the category, merged with promotion condition data. Contains
     *   only `html_condition` (the belt condition of the first available rank) when the user does not
     *   have a current rank yet. When the user has a current rank, also contains:
     *
     * @var LoginRankListGetResponseUserListRankCategoryCurrent|null
     */
    public ?LoginRankListGetResponseUserListRankCategoryCurrent $a_current = null;

    /**
     * Rank category key. Primary key from  table.
     *
     * @var string|null
     */
    public ?string $k_rank_category = null;

    /**
     * Rank category title.
     *
     * @var string|null
     */
    public ?string $text_rank_category = null;

    public function __construct(array $data)
    {
        $this->a_available = isset($data['a_available']) ? new LoginRankListGetResponseUserListRankCategoryAvailable((array)$data['a_available']) : null;
        $this->a_current = isset($data['a_current']) ? new LoginRankListGetResponseUserListRankCategoryCurrent((array)$data['a_current']) : null;
        $this->k_rank_category = isset($data['k_rank_category']) ? (string)$data['k_rank_category'] : null;
        $this->text_rank_category = isset($data['text_rank_category']) ? (string)$data['text_rank_category'] : null;
    }
}
