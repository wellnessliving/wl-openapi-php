<?php
namespace WlSdk\Wl\Profile\Form\Response;

class ResponseListGetResponseQuizLogin
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
     * The place where the request to fill out a quiz form occurred. One of the
     * [SourceSid](#/components/schemas/Wl.Quiz.Response.SourceSid) constants.
     *
     * @var int|null
     */
    public ?int $id_source = null;

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
     * The key of the request.
     *
     * @var string|null
     */
    public ?string $k_quiz_login = null;

    /**
     * Key of the response.
     *    Not `null` in case when response in draft status.
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    /**
     * The quiz title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->a_visit = isset($data['a_visit']) ? (array)$data['a_visit'] : null;
        $this->dtl_date = isset($data['dtl_date']) ? (string)$data['dtl_date'] : null;
        $this->id_source = isset($data['id_source']) ? (int)$data['id_source'] : null;
        $this->is_private = isset($data['is_private']) ? (bool)$data['is_private'] : null;
        $this->k_quiz = isset($data['k_quiz']) ? (string)$data['k_quiz'] : null;
        $this->k_quiz_login = isset($data['k_quiz_login']) ? (string)$data['k_quiz_login'] : null;
        $this->k_quiz_response = isset($data['k_quiz_response']) ? (string)$data['k_quiz_response'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
