<?php
namespace WlSdk\Wl\Quiz\Response;

class Response65GetResponseElementE
{
    /**
     * List of amendments.
     * Each element has next structure:
     *
     * @var Response65GetResponseElementEAmendment|null
     */
    public ?Response65GetResponseElementEAmendment $a_amendment = null;

    /**
     * Markup images files.
     * 
     * Only PNG images are supported.
     *
     * @var array|null
     */
    public ?array $a_markup_image = null;

    /**
     * Can user upload custom image.
     * 
     * User is allowed to upload custom images if they have the access to view the list of quizzes.
     *
     * @var bool|null
     */
    public ?bool $can_upload = null;

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
     * Element ID. One of [ElementSid](#/components/schemas/Core.Quiz.Element.ElementSid) constants.
     * 
     * Defined automatically according to the name of the class.
     *
     * @var int|null
     */
    public ?int $id_element = null;

    /**
     * ` true ` if custom markup image is to be deleted `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_delete_custom_markup_image = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    /**
     * Fake id used for image upload.
     * 
     * A fake id is being used because we are not going to save the image directly from upload.
     * Element key will be appended to make it unique.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Image ID of the temporary uploaded custom markup image to be copied as permanent drive link.
     *
     * @var string|null
     */
    public ?string $k_id_custom_markup_image = null;

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
     * Link of the source default markup image to copy to the element.
     *
     * @var string|null
     */
    public ?string $s_link_default_markup_image = null;

    /**
     * Post-Markup image binary text.
     *
     * @var string|null
     */
    public ?string $s_markup_image = null;

    /**
     * Main text of the input question.
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
     * Additional string for detail description of the question.
     *
     * @var string|null
     */
    public ?string $text_subheading = null;

    /**
     * Custom default image path.
     *
     * @var string|null
     */
    public ?string $url_custom_default_image = null;

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
        $this->a_amendment = isset($data['a_amendment']) ? new Response65GetResponseElementEAmendment((array)$data['a_amendment']) : null;
        $this->a_markup_image = isset($data['a_markup_image']) ? (array)$data['a_markup_image'] : null;
        $this->can_upload = isset($data['can_upload']) ? (bool)$data['can_upload'] : null;
        $this->html_heading = isset($data['html_heading']) ? (string)$data['html_heading'] : null;
        $this->html_subheading = isset($data['html_subheading']) ? (string)$data['html_subheading'] : null;
        $this->id_element = isset($data['id_element']) ? (int)$data['id_element'] : null;
        $this->is_delete_custom_markup_image = isset($data['is_delete_custom_markup_image']) ? (bool)$data['is_delete_custom_markup_image'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->k_id_custom_markup_image = isset($data['k_id_custom_markup_image']) ? (string)$data['k_id_custom_markup_image'] : null;
        $this->k_quiz_element = isset($data['k_quiz_element']) ? (string)$data['k_quiz_element'] : null;
        $this->k_quiz_element_old = isset($data['k_quiz_element_old']) ? (string)$data['k_quiz_element_old'] : null;
        $this->s_link_default_markup_image = isset($data['s_link_default_markup_image']) ? (string)$data['s_link_default_markup_image'] : null;
        $this->s_markup_image = isset($data['s_markup_image']) ? (string)$data['s_markup_image'] : null;
        $this->text_heading = isset($data['text_heading']) ? (string)$data['text_heading'] : null;
        $this->text_note = isset($data['text_note']) ? (string)$data['text_note'] : null;
        $this->text_subheading = isset($data['text_subheading']) ? (string)$data['text_subheading'] : null;
        $this->url_custom_default_image = isset($data['url_custom_default_image']) ? (string)$data['url_custom_default_image'] : null;
        $this->xml_heading = isset($data['xml_heading']) ? (string)$data['xml_heading'] : null;
        $this->xml_subheading = isset($data['xml_subheading']) ? (string)$data['xml_subheading'] : null;
    }
}
