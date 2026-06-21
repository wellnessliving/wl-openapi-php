<?php

namespace WlSdk\Wl\Quiz\Response;

class Response65PostRequest
{
    /**
     * Checks whether unauthorized user should be permitted to operate with form and make a response.
     * In general all quizzes should have users in response but it some cases such as registration process
     *  user might not exist yet, and we need ability to ignore check for user existence.
     * `true` - add possibility load form and accept response for non-registered user, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_anonymous = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * Whether quiz response received by kiosk or direct mode link.
     *
     * `true` quiz response received by kiosk mode.
     * `false` quiz response received by direct or direct mode.
     *
     * @var bool|null
     */
    public ?bool $is_simple = null;

    /**
     * Business key within which quiz is managed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    /**
     * Quiz response key.
     *
     * `null` in a case of response creation or
     * removing set of responses in [QuizResponseApi](/Core/Quiz/QuizResponse.json).
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    /**
     * List of quiz questions with responses.
     *
     * @var array[]|null
     */
    public ?array $a_element = null;

    /**
     * Elements' uploaded files.
     *
     * @var string|null
     */
    public ?string $a_element_file = null;

    /**
     * List of purchase items for which this form is loaded.
     *
     * The list of purchase items.
     * Each element has the format `[id_purchase_item]::[k_id]`, where:
     *
     * Empty in case when purchase item not specified or form loaded from direct link.
     *
     * @var array[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * Data for Quick Buy. Empty array if this is not a Quick Buy session.
     *
     * @var array|null
     */
    public ?array $a_quick_config = null;

    /**
     * Response source. One of {@link \WlSdk\Wl\Quiz\Response\SourceSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Quiz\Response\SourceSid
     */
    public ?int $id_source = null;

    /**
     * `true` if need to save response in draft mode, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_draft = null;

    /**
     * Whether the quiz needs to be skipped.
     *
     * @var bool|null
     */
    public ?bool $is_skip = null;

    /**
     * `true` if need make only validation, `false` need make validation and saving response.
     *
     * @var bool|null
     */
    public ?bool $is_validate_only = null;

    /**
     * List of quiz questions with responses in JSON format.
     *
     * @var string|null
     */
    public ?string $json_element = null;

    /**
     * Quiz login key.
     *
     * @var string|null
     */
    public ?string $k_quiz_login = null;

    /**
     * Secret key for access to quiz request.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * Booking appointment wizard ID.
     * Not `null` if quiz response was sent during booking appointment process.
     *
     * @var string|null
     */
    public ?string $text_appointment_wizard_id = null;

    /**
     * Booking class wizard ID.
     * Not `null` if quiz response was sent during booking class process.
     *
     * @var string|null
     */
    public ?string $text_class_wizard_id = null;

    /**
     * UID of the user who makes response for quiz.
     *
     * @var string|null
     */
    public ?string $uid_response = null;

    public function params(): array
    {
        return array_filter(
            [
            'can_anonymous' => $this->can_anonymous,
            'is_backend' => $this->is_backend,
            'is_simple' => $this->is_simple,
            'k_business' => $this->k_business,
            'k_quiz' => $this->k_quiz,
            'k_quiz_response' => $this->k_quiz_response,
            'a_element' => $this->a_element,
            'a_element_file' => $this->a_element_file,
            'a_purchase_item' => $this->a_purchase_item,
            'a_quick_config' => $this->a_quick_config,
            'id_source' => $this->id_source,
            'is_draft' => $this->is_draft,
            'is_skip' => $this->is_skip,
            'is_validate_only' => $this->is_validate_only,
            'json_element' => $this->json_element,
            'k_quiz_login' => $this->k_quiz_login,
            's_secret' => $this->s_secret,
            'text_appointment_wizard_id' => $this->text_appointment_wizard_id,
            'text_class_wizard_id' => $this->text_class_wizard_id,
            'uid_response' => $this->uid_response,
            ],
            static fn ($v) => $v !== null
        );
    }
}
