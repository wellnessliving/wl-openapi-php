<?php
namespace WlSdk\Wl\Quiz;

class QuizElementGetResponseElementJ
{
    /**
     * List of amendments.
     * Each element has next structure:
     *
     * @var QuizElementGetResponseElementJAmendment|null
     */
    public ?QuizElementGetResponseElementJAmendment $a_amendment = null;

    /**
     * Sub-question html.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Question html.
     *
     * @var string|null
     */
    public ?string $html_question = null;

    /**
     * Selected rate.
     *
     * @var int|null
     */
    public ?int $i_rate = null;

    /**
     * Rate scale.
     * 
     * One of values from {@link \WlSdk\Core\Quiz\Element\ElementQuestionAbstract} array.
     *
     * @var int|null
     */
    public ?int $i_scale = null;

    /**
     * Element ID. One of {@link \WlSdk\Core\Quiz\Element\ElementSid} constants.
     * 
     * Defined automatically according to the name of the class.
     *
     * @var int|null
     */
    public ?int $id_element = null;

    /**
     * No description.
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

    /**
     * Sub-question text.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Additional note for response.
     * 
     * `null` if no notes considered.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /**
     * Question text.
     *
     * @var string|null
     */
    public ?string $text_question = null;

    /**
     * Sub-question XML.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    /**
     * Question XML.
     *
     * @var string|null
     */
    public ?string $xml_question = null;

    public function __construct(array $data)
    {
        $this->a_amendment = isset($data['a_amendment']) ? new QuizElementGetResponseElementJAmendment((array)$data['a_amendment']) : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_question = isset($data['html_question']) ? (string)$data['html_question'] : null;
        $this->i_rate = isset($data['i_rate']) ? (int)$data['i_rate'] : null;
        $this->i_scale = isset($data['i_scale']) ? (int)$data['i_scale'] : null;
        $this->id_element = isset($data['id_element']) ? (int)$data['id_element'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_quiz_element = isset($data['k_quiz_element']) ? (string)$data['k_quiz_element'] : null;
        $this->k_quiz_element_old = isset($data['k_quiz_element_old']) ? (string)$data['k_quiz_element_old'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->text_question = isset($data['text_question']) ? (string)$data['text_question'] : null;
        $this->xml_description = isset($data['xml_description']) ? (string)$data['xml_description'] : null;
        $this->xml_question = isset($data['xml_question']) ? (string)$data['xml_question'] : null;
    }
}
