<?php

namespace WlSdk\Wl\Quiz;

class QuizElementGetResponseElementH
{
    /**
     * List of amendments.
     * Each element has next structure:
     *
     * @var QuizElementGetResponseElementHAmendment|null
     */
    public ?QuizElementGetResponseElementHAmendment $a_amendment = null;

    /**
     * Element ID. One of {@link \WlSdk\Core\Quiz\Element\ElementSid} constants.
     *
     * Defined automatically according to the name of the class.
     *
     * @var int|null
     */
    public ?int $id_element = null;

    /**
     * Whether element is required or not.
     *
     * `true` if element is required.
     * `false` if element is not required.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * Quiz element key.
     *
     * `null` in a case if element is not saved in database.
     *
     * @var string|null
     */
    public ?string $k_quiz_element = null;

    /**
     * Old quiz element key.
     *
     * `null` in a case if element is not has old version.
     *
     * @var string|null
     */
    public ?string $k_quiz_element_old = null;

    public function __construct(array $data)
    {
        $this->a_amendment = isset($data['a_amendment']) ? new QuizElementGetResponseElementHAmendment((array)$data['a_amendment']) : null;
        $this->id_element = isset($data['id_element']) ? (int)$data['id_element'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_quiz_element = isset($data['k_quiz_element']) ? (string)$data['k_quiz_element'] : null;
        $this->k_quiz_element_old = isset($data['k_quiz_element_old']) ? (string)$data['k_quiz_element_old'] : null;
    }
}
