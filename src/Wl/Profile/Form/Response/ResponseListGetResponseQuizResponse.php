<?php
namespace WlSdk\Wl\Profile\Form\Response;

class ResponseListGetResponseQuizResponse
{
    /**
     * List of visit keys associated with uncompleted response.
     *    Key is visit key.
     *    Value is date of visit.
     *
     * @var string[]|null
     */
    public ?array $a_visit = null;

    /**
     * The date of the request to fill out a quiz form.
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    /**
     * The place where the request to fill out the quiz form occurred. One of the {@link
     * \WlSdk\Wl\Quiz\Response\SourceSid} constants.
     *
     * @var \WlSdk\Wl\Quiz\Response\SourceSid|null
     */
    public ?\WlSdk\Wl\Quiz\Response\SourceSid $id_source = null;

    /**
     * Status of the response. One of {@link \WlSdk\Core\Quiz\Response\ResponseStatusSid} constants.
     *
     * @var \WlSdk\Core\Quiz\Response\ResponseStatusSid|null
     */
    public ?\WlSdk\Core\Quiz\Response\ResponseStatusSid $id_status = null;

    /**
     * Determines whether the form can be viewed by staff member only after confirmation.
     *    `true` - the form can be viewed only after confirmation.
     *    `false` - the form can always be viewed.
     *
     * @var bool|null
     */
    public ?bool $is_private = null;

    /**
     * The quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    /**
     * The quiz response key.
     *
     * @var string|null
     */
    public ?string $k_quiz_login = null;

    /**
     * Date when response amended.
     *    `null` if response was not edited.
     *
     * @var string|null
     */
    public ?string $text_amend_date = null;

    /**
     * Name of the user who amend the response.
     *    `null` if response was not edited.
     *
     * @var string|null
     */
    public ?string $text_amend_user = null;

    /**
     * The quiz title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Name of user who complete response or start a draft.
     *
     * @var string|null
     */
    public ?string $text_user = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? (array)$data['a_visit'] : null;
        $this->dtl_date = isset($data['dtl_date']) ? (string)$data['dtl_date'] : null;
        $this->id_source = isset($data['id_source']) ? \WlSdk\Wl\Quiz\Response\SourceSid::tryFrom((int)$data['id_source']) : null;
        $this->id_status = isset($data['id_status']) ? \WlSdk\Core\Quiz\Response\ResponseStatusSid::tryFrom((int)$data['id_status']) : null;
        $this->is_private = isset($data['is_private']) ? (bool)$data['is_private'] : null;
        $this->k_quiz = isset($data['k_quiz']) ? (string)$data['k_quiz'] : null;
        $this->k_quiz_login = isset($data['k_quiz_login']) ? (string)$data['k_quiz_login'] : null;
        $this->text_amend_date = isset($data['text_amend_date']) ? (string)$data['text_amend_date'] : null;
        $this->text_amend_user = isset($data['text_amend_user']) ? (string)$data['text_amend_user'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->text_user = isset($data['text_user']) ? (string)$data['text_user'] : null;
    }
}
