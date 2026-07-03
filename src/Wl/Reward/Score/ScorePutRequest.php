<?php

namespace WlSdk\Wl\Reward\Score;

class ScorePutRequest
{
    /**
     * Depending on arguments specified during API request might be:
     * * Total number of points which were earned for each activity in a list provided in {@link
     * \WlSdk\Wl\Reward\Score\Score}
     *   in a case if it was provided.
     * * Total number of points user currently own in a cast if {@link \WlSdk\Wl\Reward\Score\Score} specified.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * Business key within which score should be managed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * String to be added as a comment to manual reward points changes.
     *
     * @var string|null
     */
    public ?string $text_comment = null;

    /**
     * User key for which score should be managed.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_score' => $this->i_score,
            'k_business' => $this->k_business,
            'text_comment' => $this->text_comment,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
