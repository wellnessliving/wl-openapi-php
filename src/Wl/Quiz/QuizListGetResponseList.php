<?php

namespace WlSdk\Wl\Quiz;

class QuizListGetResponseList
{
    /**
     * Date and time the quiz was created, in UTC.
     *
     * @var string|null
     */
    public ?string $dtu_create = null;

    /**
     * Date and time the quiz was last edited, in UTC.
     *
     * @var string|null
     */
    public ?string $dtu_edit = null;

    /**
     * Whether the quiz is active. `true` if active, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * Quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    /**
     * Quiz form configuration:
     *
     * @var QuizListGetResponseListConfig|null
     */
    public ?QuizListGetResponseListConfig $a_config = null;

    /**
     * Unique random string used for the form kiosk mode page.
     *
     * @var string|null
     */
    public ?string $s_file = null;

    /**
     * Quiz title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Key of the user who created the quiz. `null` if unknown or imported.
     *
     * @var string|null
     */
    public ?string $uid_create = null;

    /**
     * Key of the user who last edited the quiz. `null` if unknown or imported.
     *
     * @var string|null
     */
    public ?string $uid_edit = null;

    public function __construct(array $data)
    {
        $this->dtu_create = isset($data['dtu_create']) ? (string)$data['dtu_create'] : null;
        $this->dtu_edit = isset($data['dtu_edit']) ? (string)$data['dtu_edit'] : null;
        $this->is_active = isset($data['is_active']) ? (bool)$data['is_active'] : null;
        $this->k_quiz = isset($data['k_quiz']) ? (string)$data['k_quiz'] : null;
        $this->a_config = isset($data['a_config']) ? new QuizListGetResponseListConfig((array)$data['a_config']) : null;
        $this->s_file = isset($data['s_file']) ? (string)$data['s_file'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->uid_create = isset($data['uid_create']) ? (string)$data['uid_create'] : null;
        $this->uid_edit = isset($data['uid_edit']) ? (string)$data['uid_edit'] : null;
    }
}
