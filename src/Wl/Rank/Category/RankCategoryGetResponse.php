<?php

namespace WlSdk\Wl\Rank\Category;

/**
 * Response from GET
 */
class RankCategoryGetResponse
{
    /**
     * A list of belts categories, keys, and information. Each element is an array with the following information:
     *
     * @var RankCategoryGetResponseRankCategoryList[]|null
     */
    public ?array $a_rank_category_list = null;

    public function __construct(array $data)
    {
        $this->a_rank_category_list = isset($data['a_rank_category_list']) ? array_map(static fn ($item) => new RankCategoryGetResponseRankCategoryList((array)$item), (array)$data['a_rank_category_list']) : null;
    }
}
