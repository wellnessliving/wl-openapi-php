<?php
namespace WlSdk\Wl\Quiz;

class QuizElementGetResponseElementF
{
    /**
     * List of amendments.
     * Each element has next structure:
     *
     * @var QuizElementGetResponseElementFAmendment|null
     */
    public ?QuizElementGetResponseElementFAmendment $a_amendment = null;

    /**
     * Additional html for detail description of the question.
     *
     * @var string|null
     */
    public ?string $html_heading = null;

    /**
     * Footer text of signature pad.
     *
     * @var string|null
     */
    public ?string $html_signature_footer = null;

    /**
     * Header text of signature pad.
     *
     * @var string|null
     */
    public ?string $html_signature_header = null;

    /**
     * Main html of the input question.
     *
     * @var string|null
     */
    public ?string $html_subheading = null;

    /**
     * Element ID. One of [ElementSid](#/components/schemas/Core.Quiz.Element.ElementSid) constants.
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
     * Signature binary text.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    /**
     * Additional string for detail description of the question.
     *
     * @var string|null
     */
    public ?string $text_heading = null;

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
        $this->a_amendment = isset($data['a_amendment']) ? new QuizElementGetResponseElementFAmendment((array)$data['a_amendment']) : null;
        $this->html_heading = isset($data['html_heading']) ? (string)$data['html_heading'] : null;
        $this->html_signature_footer = isset($data['html_signature_footer']) ? (string)$data['html_signature_footer'] : null;
        $this->html_signature_header = isset($data['html_signature_header']) ? (string)$data['html_signature_header'] : null;
        $this->html_subheading = isset($data['html_subheading']) ? (string)$data['html_subheading'] : null;
        $this->id_element = isset($data['id_element']) ? (int)$data['id_element'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_quiz_element = isset($data['k_quiz_element']) ? (string)$data['k_quiz_element'] : null;
        $this->k_quiz_element_old = isset($data['k_quiz_element_old']) ? (string)$data['k_quiz_element_old'] : null;
        $this->s_signature = isset($data['s_signature']) ? (string)$data['s_signature'] : null;
        $this->text_heading = isset($data['text_heading']) ? (string)$data['text_heading'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->text_subheading = isset($data['text_subheading']) ? (string)$data['text_subheading'] : null;
        $this->xml_heading = isset($data['xml_heading']) ? (string)$data['xml_heading'] : null;
        $this->xml_subheading = isset($data['xml_subheading']) ? (string)$data['xml_subheading'] : null;
    }
}
