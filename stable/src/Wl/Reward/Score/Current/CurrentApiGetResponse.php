<?php
namespace WlSdk\Wl\Reward\Score\Current;

/**
 * Response from GET
 */
class CurrentApiGetResponse
{
    /**
     * Current user's rank in the first leaderboard.
     *
     * @var int|null
     */
    public ?int $i_board_rank = null;

    /**
     * Current score in wellnessliving points.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * Title of the first leaderboard.
     *
     * @var string|null
     */
    public ?string $s_board_title = null;

    public function __construct(array $data)
    {
        $this->i_board_rank = isset($data['i_board_rank']) ? (int)$data['i_board_rank'] : null;
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
        $this->s_board_title = isset($data['s_board_title']) ? (string)$data['s_board_title'] : null;
    }
}
