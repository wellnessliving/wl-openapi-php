<?php
namespace WlSdk\Wl\Quiz;

class QuizElement72GetResponseElementD
{
    /**
     * List of amendments.
     * Each element has next structure:
     *
     * @var QuizElement72GetResponseElementDAmendment|null
     */
    public ?QuizElement72GetResponseElementDAmendment $a_amendment = null;

    /**
     * Whether this element has a duplicate.
     * 
     * `true` if this element has a duplicate, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $has_duplicate = null;

    /**
     * HTML of the image caption.
     *
     * @var string|null
     */
    public ?string $html_caption = null;

    /**
     * Main HTML of the image heading.
     *
     * @var string|null
     */
    public ?string $html_heading = null;

    /**
     * Additional HTML for detail description of the image (optional).
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
     * Image source key for duplicate.
     *
     * @var string|null
     */
    public ?string $k_id_source = null;

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
     * Command for image save prepare.
     *
     * @var string|null
     */
    public ?string $s_command = null;

    /**
     * Image caption.
     *
     * @var string|null
     */
    public ?string $text_caption = null;

    /**
     * Main XML of the input question.
     *
     * @var string|null
     */
    public ?string $xml_heading = null;

    /**
     * Additional XML for detail description of the question.
     *
     * @var string|null
     */
    public ?string $xml_subheading = null;

    public function __construct(array $data)
    {
        $this->a_amendment = isset($data['a_amendment']) ? new QuizElement72GetResponseElementDAmendment((array)$data['a_amendment']) : null;
        $this->has_duplicate = isset($data['has_duplicate']) ? (bool)$data['has_duplicate'] : null;
        $this->html_caption = isset($data['html_caption']) ? (string)$data['html_caption'] : null;
        $this->html_heading = isset($data['html_heading']) ? (string)$data['html_heading'] : null;
        $this->html_subheading = isset($data['html_subheading']) ? (string)$data['html_subheading'] : null;
        $this->id_element = isset($data['id_element']) ? (int)$data['id_element'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_id_source = isset($data['k_id_source']) ? (string)$data['k_id_source'] : null;
        $this->k_quiz_element = isset($data['k_quiz_element']) ? (string)$data['k_quiz_element'] : null;
        $this->k_quiz_element_old = isset($data['k_quiz_element_old']) ? (string)$data['k_quiz_element_old'] : null;
        $this->s_command = isset($data['s_command']) ? (string)$data['s_command'] : null;
        $this->text_caption = isset($data['text_caption']) ? (string)$data['text_caption'] : null;
        $this->xml_heading = isset($data['xml_heading']) ? (string)$data['xml_heading'] : null;
        $this->xml_subheading = isset($data['xml_subheading']) ? (string)$data['xml_subheading'] : null;
    }
}
