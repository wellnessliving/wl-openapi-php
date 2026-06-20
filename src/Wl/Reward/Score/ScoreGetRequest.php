<?php
namespace WlSdk\Wl\Reward\Score;

class ScoreGetRequest
{
    /**
     * List of login activity keys for which points should be added or returned.
     * 
     * NOTE: Login activity might belong to different users. It is possible for ex if booking performed
     * for several users (usually family members) and required to retrieve sum of all scores for preformed
     * activities.
     *
     * @var string[]|null
     */
    public ?array $a_login_activity = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_login_activity' => $this->a_login_activity,
            ],
            static fn($v) => $v !== null
        );
    }
}
