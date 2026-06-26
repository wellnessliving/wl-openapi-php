<?php

namespace WlSdk\Core\Quiz;

/**
 * Response from GET
 */
class QuizListGetResponse
{
    /**
     * List of available quizzes within quiz holder.
     *
     * @var array|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
    }
}
