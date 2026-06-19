<?php
namespace WlSdk\Wl\Appointment\Book\Question;

/**
 * Response from GET
 */
class QuestionGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_question = null;

    public function __construct(array $data)
    {
        $this->a_question = isset($data['a_question']) ? (array)$data['a_question'] : null;
    }
}
