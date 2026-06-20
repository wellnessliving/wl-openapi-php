<?php
namespace WlSdk\Wl\Review;

/**
 * Response from POST
 */
class ReviewPostResponse
{
    /**
     * Reward score for leaving a review.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * Reward score for sharing a review on Facebook.
     *
     * @var int|null
     */
    public ?int $i_score_facebook = null;

    /**
     * Reward score for sharing a review on Twitter.
     *
     * @var int|null
     */
    public ?int $i_score_twitter = null;

    /**
     * If a reward score for leaving a review exists.
     *
     * @var bool|null
     */
    public ?bool $is_score = null;

    /**
     * If a reward score for sharing a review on Facebook exists.
     *
     * @var bool|null
     */
    public ?bool $is_score_facebook = null;

    /**
     * If a reward score for sharing a review on Twitter exists.
     *
     * @var bool|null
     */
    public ?bool $is_score_twitter = null;

    /**
     * If a reward score for sharing exists.
     *
     * @var bool|null
     */
    public ?bool $is_share_points = null;

    /**
     * If a reward score does not exist for leaving a review or sharing the review.
     *
     * @var bool|null
     */
    public ?bool $is_share_points_none = null;

    /**
     * The key of the review writing activity. This will be empty if the review was saved but not published.
     *
     * @var string|null
     */
    public ?string $k_login_activity = null;

    /**
     * Review key.
     *
     * @var string|null
     */
    public ?string $k_review = null;

    /**
     * The UID of client who leaves review.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The sharing url of the review.
     *
     * @var string|null
     */
    public ?string $url_share = null;

    public function __construct(array $data)
    {
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
        $this->i_score_facebook = isset($data['i_score_facebook']) ? (int)$data['i_score_facebook'] : null;
        $this->i_score_twitter = isset($data['i_score_twitter']) ? (int)$data['i_score_twitter'] : null;
        $this->is_score = isset($data['is_score']) ? (bool)$data['is_score'] : null;
        $this->is_score_facebook = isset($data['is_score_facebook']) ? (bool)$data['is_score_facebook'] : null;
        $this->is_score_twitter = isset($data['is_score_twitter']) ? (bool)$data['is_score_twitter'] : null;
        $this->is_share_points = isset($data['is_share_points']) ? (bool)$data['is_share_points'] : null;
        $this->is_share_points_none = isset($data['is_share_points_none']) ? (bool)$data['is_share_points_none'] : null;
        $this->k_login_activity = isset($data['k_login_activity']) ? (string)$data['k_login_activity'] : null;
        $this->k_review = isset($data['k_review']) ? (string)$data['k_review'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_share = isset($data['url_share']) ? (string)$data['url_share'] : null;
    }
}
