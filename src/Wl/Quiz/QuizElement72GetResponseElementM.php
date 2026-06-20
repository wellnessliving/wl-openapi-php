<?php
namespace WlSdk\Wl\Quiz;

class QuizElement72GetResponseElementM
{
    /**
     * List of amendments.
     * Each element has next structure:
     *
     * @var QuizElement72GetResponseElementMAmendment|null
     */
    public ?QuizElement72GetResponseElementMAmendment $a_amendment = null;

    /**
     * Main content HTML.
     *
     * @var string|null
     */
    public ?string $html_content = null;

    /**
     * Heading HTML.
     *
     * @var string|null
     */
    public ?string $html_heading = null;

    /**
     * Element ID. One of [ElementSid](#/components/schemas/Core.Quiz.Element.ElementSid) constants.
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
     * Main content text.
     *
     * @var string|null
     */
    public ?string $text_content = null;

    /**
     * Heading text.
     *
     * @var string|null
     */
    public ?string $text_heading = null;

    /**
     * Main content XML.
     *
     * @var string|null
     */
    public ?string $xml_content = null;

    /**
     * Heading XML.
     *
     * @var string|null
     */
    public ?string $xml_heading = null;

    public function __construct(array $data)
    {
        $this->a_amendment = isset($data['a_amendment']) ? new QuizElement72GetResponseElementMAmendment((array)$data['a_amendment']) : null;
        $this->html_content = isset($data['html_content']) ? (string)$data['html_content'] : null;
        $this->html_heading = isset($data['html_heading']) ? (string)$data['html_heading'] : null;
        $this->id_element = isset($data['id_element']) ? (int)$data['id_element'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_quiz_element = isset($data['k_quiz_element']) ? (string)$data['k_quiz_element'] : null;
        $this->k_quiz_element_old = isset($data['k_quiz_element_old']) ? (string)$data['k_quiz_element_old'] : null;
        $this->text_content = isset($data['text_content']) ? (string)$data['text_content'] : null;
        $this->text_heading = isset($data['text_heading']) ? (string)$data['text_heading'] : null;
        $this->xml_content = isset($data['xml_content']) ? (string)$data['xml_content'] : null;
        $this->xml_heading = isset($data['xml_heading']) ? (string)$data['xml_heading'] : null;
    }
}
