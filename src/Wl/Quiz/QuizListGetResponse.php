<?php

namespace WlSdk\Wl\Quiz;

/**
 * Response from GET
 */
class QuizListGetResponse
{
    /**
     * List of available quizzes within quiz holder:
     *
     * @var QuizListGetResponseList|null
     */
    public ?QuizListGetResponseList $a_list = null;

    /**
     * List of quiz keys, needed for registration.
     * Each element is a primary key in the `wl_quiz` table.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_register = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? new QuizListGetResponseList((array)$data['a_list']) : null;
        $this->a_quiz_register = isset($data['a_quiz_register']) ? (array)$data['a_quiz_register'] : null;
    }
}
