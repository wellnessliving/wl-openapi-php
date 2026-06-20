<?php
namespace WlSdk\Wl\Rank;

class RankGetResponseRankList
{
    /**
     * A belt key.
     *
     * @var string|null
     */
    public ?string $k_rank = null;

    /**
     * A belt category key.
     *
     * @var string|null
     */
    public ?string $k_rank_category = null;

    /**
     * Belt title.
     *
     * @var string|null
     */
    public ?string $text_rank = null;

    /**
     * Belt category title.
     *
     * @var string|null
     */
    public ?string $text_rank_category = null;

    public function __construct(array $data)
    {
        $this->k_rank = isset($data['k_rank']) ? (string)$data['k_rank'] : null;
        $this->k_rank_category = isset($data['k_rank_category']) ? (string)$data['k_rank_category'] : null;
        $this->text_rank = isset($data['text_rank']) ? (string)$data['text_rank'] : null;
        $this->text_rank_category = isset($data['text_rank_category']) ? (string)$data['text_rank_category'] : null;
    }
}
