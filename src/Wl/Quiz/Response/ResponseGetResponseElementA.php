<?php
namespace WlSdk\Wl\Quiz\Response;

class ResponseGetResponseElementA
{
    /**
     * List of amendments.
     * Each element has next structure:
     *
     * @var ResponseGetResponseElementAAmendment|null
     */
    public ?ResponseGetResponseElementAAmendment $a_amendment = null;

    /**
     * Answer array for selected question options.
     *
     * @var int[]|null
     */
    public ?array $a_answer = null;

    /**
     * Array for a dropdown question's options.
     *
     * @var string[]|null
     */
    public ?array $a_list = null;

    /**
     * Additional string for detail description of the question.
     *
     * @var string|null
     */
    public ?string $html_description = null;

    /**
     * Main html of the input question.
     *
     * @var string|null
     */
    public ?string $html_question = null;

    /**
     * Element ID. One of {@link \WlSdk\Core\Quiz\Element\ElementSid} constants.
     * 
     * Defined automatically according to the name of the class.
     *
     * @var int|null
     */
    public ?int $id_element = null;

    /**
     * Answer can have multiple options selected.
     *
     * @var bool|null
     */
    public ?bool $is_multiple = null;

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
     * Additional string for detail description of the question.
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
     * Main text of the input question.
     *
     * @var string|null
     */
    public ?string $text_question = null;

    /**
     * Additional XML for detail description of the question.
     *
     * @var string|null
     */
    public ?string $xml_description = null;

    /**
     * Main XML of the input question.
     *
     * @var string|null
     */
    public ?string $xml_question = null;

    public function __construct(array $data)
    {
        $this->a_amendment = isset($data['a_amendment']) ? new ResponseGetResponseElementAAmendment((array)$data['a_amendment']) : null;
        $this->a_answer = isset($data['a_answer']) ? (array)$data['a_answer'] : null;
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
        $this->html_description = isset($data['html_description']) ? (string)$data['html_description'] : null;
        $this->html_question = isset($data['html_question']) ? (string)$data['html_question'] : null;
        $this->id_element = isset($data['id_element']) ? (int)$data['id_element'] : null;
        $this->is_multiple = isset($data['is_multiple']) ? (bool)$data['is_multiple'] : null;
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
