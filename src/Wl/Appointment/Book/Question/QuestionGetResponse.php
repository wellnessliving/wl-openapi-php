<?php
namespace WlSdk\Wl\Appointment\Book\Question;

/**
 * Response from GET
 */
class QuestionGetResponse
{
    /**
     * A list of questions for the service. Each element contains:
     *
     * @var QuestionGetResponseQuestion[]|null
     */
    public ?array $a_question = null;

    public function __construct(array $data)
    {
        $this->a_question = isset($data['a_question']) ? array_map(static fn($item) => new QuestionGetResponseQuestion((array)$item), (array)$data['a_question']) : null;
    }
}
