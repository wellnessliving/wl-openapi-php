<?php
namespace WlSdk\Wl\Quiz;

class QuizElementGetResponseElementK
{
    /**
     * List of amendments.
     * Each element has next structure:
     *
     * @var QuizElementGetResponseElementKAmendment|null
     */
    public ?QuizElementGetResponseElementKAmendment $a_amendment = null;

    /**
     * Markup images files.
     * 
     * Only PNG images are supported.
     *
     * @var array|null
     */
    public ?array $a_markup_image = null;

    /**
     * Whether this element has a duplicate.
     * 
     * `true` if this element has a duplicate, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $has_duplicate = null;

    /**
     * Main HTML of the input question.
     *
     * @var string|null
     */
    public ?string $html_heading = null;

    /**
     * Additional HTML for detail description of the question.
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
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * Left response image key.
     *
     * @var string|null
     */
    public ?string $k_id_image_left = null;

    /**
     * Right response image key.
     *
     * @var string|null
     */
    public ?string $k_id_image_right = null;

    /**
     * Left image source key for duplicate.
     *
     * @var string|null
     */
    public ?string $k_id_source_left = null;

    /**
     * Right image source key for duplicate.
     *
     * @var string|null
     */
    public ?string $k_id_source_right = null;

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
     * Command for left image save prepare.
     *
     * @var string|null
     */
    public ?string $s_command_left = null;

    /**
     * Command for right image save prepare.
     *
     * @var string|null
     */
    public ?string $s_command_right = null;

    /**
     * Post-Markup image binary text.
     *
     * @var string|null
     */
    public ?string $s_markup_image = null;

    /**
     * Title for left image.
     *
     * @var string|null
     */
    public ?string $text_left_image = null;

    /**
     * Additional note for response.
     * 
     * `null` if no notes considered.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    /**
     * Title for right image.
     *
     * @var string|null
     */
    public ?string $text_right_image = null;

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
        $this->a_amendment = isset($data['a_amendment']) ? new QuizElementGetResponseElementKAmendment((array)$data['a_amendment']) : null;
        $this->a_markup_image = isset($data['a_markup_image']) ? (array)$data['a_markup_image'] : null;
        $this->has_duplicate = isset($data['has_duplicate']) ? (bool)$data['has_duplicate'] : null;
        $this->html_heading = isset($data['html_heading']) ? (string)$data['html_heading'] : null;
        $this->html_subheading = isset($data['html_subheading']) ? (string)$data['html_subheading'] : null;
        $this->id_element = isset($data['id_element']) ? (int)$data['id_element'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_id_image_left = isset($data['k_id_image_left']) ? (string)$data['k_id_image_left'] : null;
        $this->k_id_image_right = isset($data['k_id_image_right']) ? (string)$data['k_id_image_right'] : null;
        $this->k_id_source_left = isset($data['k_id_source_left']) ? (string)$data['k_id_source_left'] : null;
        $this->k_id_source_right = isset($data['k_id_source_right']) ? (string)$data['k_id_source_right'] : null;
        $this->k_quiz_element = isset($data['k_quiz_element']) ? (string)$data['k_quiz_element'] : null;
        $this->k_quiz_element_old = isset($data['k_quiz_element_old']) ? (string)$data['k_quiz_element_old'] : null;
        $this->s_command_left = isset($data['s_command_left']) ? (string)$data['s_command_left'] : null;
        $this->s_command_right = isset($data['s_command_right']) ? (string)$data['s_command_right'] : null;
        $this->s_markup_image = isset($data['s_markup_image']) ? (string)$data['s_markup_image'] : null;
        $this->text_left_image = isset($data['text_left_image']) ? (string)$data['text_left_image'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->text_right_image = isset($data['text_right_image']) ? (string)$data['text_right_image'] : null;
        $this->xml_heading = isset($data['xml_heading']) ? (string)$data['xml_heading'] : null;
        $this->xml_subheading = isset($data['xml_subheading']) ? (string)$data['xml_subheading'] : null;
    }
}
