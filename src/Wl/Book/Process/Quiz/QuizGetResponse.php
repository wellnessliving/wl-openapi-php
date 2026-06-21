<?php

namespace WlSdk\Wl\Book\Process\Quiz;

/**
 * Response from GET
 */
class QuizGetResponse
{
    /**
     * The list of quizzes. Each element has the next structure:
     *
     * @var QuizGetResponseQuiz[]|null
     */
    public ?array $a_quiz = null;

    public function __construct(array $data)
    {
        $this->a_quiz = isset($data['a_quiz']) ? array_map(static fn ($item) => new QuizGetResponseQuiz((array)$item), (array)$data['a_quiz']) : null;
    }
}
