<?php
namespace WlSdk\Wl\Book\Process\Quiz;

class QuizGetResponseQuiz
{
    /**
     * Determines whether the quiz is required.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * The quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    public function __construct(array $data)
    {
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_quiz = isset($data['k_quiz']) ? (string)$data['k_quiz'] : null;
    }
}
