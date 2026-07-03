<?php

namespace WlSdk\Wl\Reward\Score;

/**
 * Response from GET
 */
class ScoreGetResponse
{
    /**
     * Depending on arguments specified during API request might be:
     * * Total number of points which were earned for each activity in a list provided in
     * [ScoreApi::$a_login_activity](/Wl/Reward/Score/Score.json)
     *   in a case if it was provided.
     * * Total number of points user currently own in a cast if [ScoreApi::$uid](/Wl/Reward/Score/Score.json)
     * specified.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    public function __construct(array $data)
    {
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
    }
}
