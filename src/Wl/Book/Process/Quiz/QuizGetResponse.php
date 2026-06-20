<?php

namespace WlSdk\Wl\Book\Process\Quiz;

/**
 * Response from GET
 */
class QuizGetResponse
{
    /**
     * No description.
     *
     * @var QuizGetResponseQuiz[]|null
     */
    public ?array $a_quiz = null;

    public function __construct(array $data)
    {
        $this->a_quiz = isset($data['a_quiz']) ? array_map(static fn ($item) => new QuizGetResponseQuiz((array)$item), (array)$data['a_quiz']) : null;
    }
}
