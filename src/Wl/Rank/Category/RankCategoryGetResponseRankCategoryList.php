<?php

namespace WlSdk\Wl\Rank\Category;

class RankCategoryGetResponseRankCategoryList
{
    /**
     * A belt category key. Primary key in RsRankCategorySql table.
     *
     * @var string|null
     */
    public ?string $k_rank_category = null;

    /**
     * Belt category title.
     *
     * @var string|null
     */
    public ?string $text_rank_category = null;

    public function __construct(array $data)
    {
        $this->k_rank_category = isset($data['k_rank_category']) ? (string)$data['k_rank_category'] : null;
        $this->text_rank_category = isset($data['text_rank_category']) ? (string)$data['text_rank_category'] : null;
    }
}
