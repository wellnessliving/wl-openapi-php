<?php
namespace WlSdk\Wl\Quiz;

class QuizElementGetResponseAccessLog
{
    /**
     * Date and time of the quiz changes.
     *
     * @var string|null
     */
    public ?string $dtu_activity = null;

    /**
     * User's key.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /**
     * One of {@link \WlSdk\Wl\Quiz\Activity\ActivitySid} constants.
     *
     * @var \WlSdk\Wl\Quiz\Activity\ActivitySid|null
     */
    public ?\WlSdk\Wl\Quiz\Activity\ActivitySid $id_activity = null;

    /**
     * Title of the activity
     *
     * @var string|null
     */
    public ?string $text_activity = null;

    /**
     * Date and time of the quiz changes in appropriate format string for further render.
     *
     * @var string|null
     */
    public ?string $text_date = null;

    /**
     * Full name of the user who made an activity.
     *
     * @var string|null
     */
    public ?string $text_actor = null;

    /**
     * Url for view information about the user who made activity (admin, staff, client).
     *
     * @var string|null
     */
    public ?string $url_actor = null;

    public function __construct(array $data)
    {
        $this->dtu_activity = isset($data['dtu_activity']) ? (string)$data['dtu_activity'] : null;
        $this->uid_actor = isset($data['uid_actor']) ? (string)$data['uid_actor'] : null;
        $this->id_activity = isset($data['id_activity']) ? \WlSdk\Wl\Quiz\Activity\ActivitySid::tryFrom((int)$data['id_activity']) : null;
        $this->text_activity = isset($data['text_activity']) ? (string)$data['text_activity'] : null;
        $this->text_date = isset($data['text_date']) ? (string)$data['text_date'] : null;
        $this->text_actor = isset($data['text_actor']) ? (string)$data['text_actor'] : null;
        $this->url_actor = isset($data['url_actor']) ? (string)$data['url_actor'] : null;
    }
}
