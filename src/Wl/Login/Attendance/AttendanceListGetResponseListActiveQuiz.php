<?php
namespace WlSdk\Wl\Login\Attendance;

class AttendanceListGetResponseListActiveQuiz
{
    /**
     * Response status ID. One of {@link \WlSdk\Core\Quiz\Response\ResponseStatusSid} constants.
     *
     * @var \WlSdk\Core\Quiz\Response\ResponseStatusSid|null
     */
    public ?\WlSdk\Core\Quiz\Response\ResponseStatusSid $id_status = null;

    /**
     * Whether it's hidden. `true` quiz is hidden, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_hide = null;

    /**
     * Whether it's required. `true` quiz is required, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * Quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    /**
     * Quiz login key.
     *
     * @var string|null
     */
    public ?string $k_quiz_login = null;

    /**
     * Quiz response key.
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    /**
     * Quiz title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->id_status = isset($data['id_status']) ? \WlSdk\Core\Quiz\Response\ResponseStatusSid::tryFrom((int)$data['id_status']) : null;
        $this->is_hide = isset($data['is_hide']) ? (bool)$data['is_hide'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_quiz = isset($data['k_quiz']) ? (string)$data['k_quiz'] : null;
        $this->k_quiz_login = isset($data['k_quiz_login']) ? (string)$data['k_quiz_login'] : null;
        $this->k_quiz_response = isset($data['k_quiz_response']) ? (string)$data['k_quiz_response'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
