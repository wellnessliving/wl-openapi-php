<?php

namespace WlSdk\Wl\Rank;

/**
 * Response from GET
 */
class RankGetResponse
{
    /**
     * A list of belts, keys, and information. Each element is an array with the following information:
     *
     * @var RankGetResponseRankList[]|null
     */
    public ?array $a_rank_list = null;

    public function __construct(array $data)
    {
        $this->a_rank_list = isset($data['a_rank_list']) ? array_map(static fn ($item) => new RankGetResponseRankList((array)$item), (array)$data['a_rank_list']) : null;
    }
}
