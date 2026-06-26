<?php

namespace WlSdk\Wl\Rank;

/**
 * Response from GET
 */
class SearchDataGetResponse
{
    /**
     * Belt rank categories.
     *
     * @var array[]|null
     */
    public ?array $a_rank_category_list = null;

    public function __construct(array $data)
    {
        $this->a_rank_category_list = isset($data['a_rank_category_list']) ? (array)$data['a_rank_category_list'] : null;
    }
}
