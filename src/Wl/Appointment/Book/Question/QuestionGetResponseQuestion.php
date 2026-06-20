<?php
namespace WlSdk\Wl\Appointment\Book\Question;

class QuestionGetResponseQuestion
{
    /**
     * Number of text rows for the answer input. Values greater than 1 indicate a multi-line answer.
     *
     * @var int|null
     */
    public ?int $i_size = null;

    /**
     * `true` if `i_size` is greater than 1, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_multiple = null;

    /**
     * SHA1 hash of the question text, used as a unique identifier for the question.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * Question text.
     *
     * @var string|null
     */
    public ?string $s_question = null;

    public function __construct(array $data)
    {
        $this->i_size = isset($data['i_size']) ? (int)$data['i_size'] : null;
        $this->is_multiple = isset($data['is_multiple']) ? (bool)$data['is_multiple'] : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
        $this->s_question = isset($data['s_question']) ? (string)$data['s_question'] : null;
    }
}
