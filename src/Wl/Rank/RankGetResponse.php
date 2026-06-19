<?php
namespace WlSdk\Wl\Rank;

/**
 * Response from GET
 */
class RankGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_rank_list = null;

    public function __construct(array $data)
    {
        $this->a_rank_list = isset($data['a_rank_list']) ? (array)$data['a_rank_list'] : null;
    }
}
