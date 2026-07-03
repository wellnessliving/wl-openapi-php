<?php

namespace WlSdk\Wl\Catalog\Quiz;

/**
 * Response from GET
 */
class QuizGetResponse
{
    /**
     * List of quizzes. Each element has next structure:
     *
     * @var QuizGetResponseQuiz|null
     */
    public ?QuizGetResponseQuiz $a_quiz = null;

    public function __construct(array $data)
    {
        $this->a_quiz = isset($data['a_quiz']) ? new QuizGetResponseQuiz((array)$data['a_quiz']) : null;
    }
}
