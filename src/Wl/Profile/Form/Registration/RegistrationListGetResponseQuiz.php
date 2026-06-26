<?php

namespace WlSdk\Wl\Profile\Form\Registration;

class RegistrationListGetResponseQuiz
{
    /**
     * Whether form is require to completion.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * Quiz key. Primary key in QuizSql table.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    /**
     * Quiz login key. Primary key in QuizLoginSql table.
     *
     * @var string|null
     */
    public ?string $k_quiz_login = null;

    /**
     * Quiz title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_quiz = isset($data['k_quiz']) ? (string)$data['k_quiz'] : null;
        $this->k_quiz_login = isset($data['k_quiz_login']) ? (string)$data['k_quiz_login'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
