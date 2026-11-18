<?php

namespace WlSdk\Wl\Quiz;

/**
 * Response from GET
 */
class QuizList79GetResponse
{
    /**
     * List of available quizzes within quiz holder:
     *
     * @var QuizList79GetResponseList|null
     */
    public ?QuizList79GetResponseList $a_list = null;

    /**
     * List of quiz keys, needed for registration.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_register = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? new QuizList79GetResponseList((array)$data['a_list']) : null;
        $this->a_quiz_register = isset($data['a_quiz_register']) ? (array)$data['a_quiz_register'] : null;
    }
}
