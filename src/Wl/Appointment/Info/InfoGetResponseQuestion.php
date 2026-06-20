<?php
namespace WlSdk\Wl\Appointment\Info;

class InfoGetResponseQuestion
{
    /**
     * Size of rows for answer.
     *
     * @var int|null
     */
    public ?int $i_size = null;

    /**
     * `true` if `i_size` greater than 1, `false` otherwise. Can be empty if answer is loaded.
     *
     * @var bool|null
     */
    public ?bool $is_multiple = null;

    /**
     * Answer for `s_question`.
     *
     * @var string|null
     */
    public ?string $s_answer = null;

    /**
     * Answer key.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * Question.
     *
     * @var string|null
     */
    public ?string $s_question = null;

    public function __construct(array $data)
    {
        $this->i_size = isset($data['i_size']) ? (int)$data['i_size'] : null;
        $this->is_multiple = isset($data['is_multiple']) ? (bool)$data['is_multiple'] : null;
        $this->s_answer = isset($data['s_answer']) ? (string)$data['s_answer'] : null;
        $this->s_key = isset($data['s_key']) ? (string)$data['s_key'] : null;
        $this->s_question = isset($data['s_question']) ? (string)$data['s_question'] : null;
    }
}
