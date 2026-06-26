<?php

namespace WlSdk\Wl\Catalog\Quiz;

class QuizGetResponseQuiz
{
    /**
     * Whether the quiz is required and can not be skipped.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * Quiz key. Primary key from QuizSql table.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

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
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
