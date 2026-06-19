<?php
namespace WlSdk\Wl\Book\Process\Quiz;

/**
 * Response from GET
 */
class QuizApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_quiz = null;

    public function __construct(array $data)
    {
        $this->a_quiz = isset($data['a_quiz']) ? (array)$data['a_quiz'] : null;
    }
}
