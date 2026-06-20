<?php
namespace WlSdk\Wl\Quiz;

class QuizElementGetResponseElementB
{
    /**
     * List of amendments.
     * Each element has next structure:
     *
     * @var QuizElementGetResponseElementBAmendment|null
     */
    public ?QuizElementGetResponseElementBAmendment $a_amendment = null;

    /**
     * Additional HTML for detail description of the question.
     *
     * @var string|null
     */
    public ?string $html_heading = null;

    /**
     * Main HTML of the input question.
     *
     * @var string|null
     */
    public ?string $html_subheading = null;

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

    /**
     * Additional string for detail description of the question.
     *
     * @var string|null
     */
    public ?string $text_heading = null;

    /**
     * Main text of the input question.
     *
     * @var string|null
     */
    public ?string $text_subheading = null;

    /**
     * Additional XML for detail description of the question.
     *
     * @var string|null
     */
    public ?string $xml_heading = null;

    /**
     * Main XML of the input question.
     *
     * @var string|null
     */
    public ?string $xml_subheading = null;

    public function __construct(array $data)
    {
        $this->a_amendment = isset($data['a_amendment']) ? new QuizElementGetResponseElementBAmendment((array)$data['a_amendment']) : null;
        $this->html_heading = isset($data['html_heading']) ? (string)$data['html_heading'] : null;
        $this->html_subheading = isset($data['html_subheading']) ? (string)$data['html_subheading'] : null;
        $this->id_element = isset($data['id_element']) ? (int)$data['id_element'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_quiz_element = isset($data['k_quiz_element']) ? (string)$data['k_quiz_element'] : null;
        $this->k_quiz_element_old = isset($data['k_quiz_element_old']) ? (string)$data['k_quiz_element_old'] : null;
        $this->text_heading = isset($data['text_heading']) ? (string)$data['text_heading'] : null;
        $this->text_subheading = isset($data['text_subheading']) ? (string)$data['text_subheading'] : null;
        $this->xml_heading = isset($data['xml_heading']) ? (string)$data['xml_heading'] : null;
        $this->xml_subheading = isset($data['xml_subheading']) ? (string)$data['xml_subheading'] : null;
    }
}
