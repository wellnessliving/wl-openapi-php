<?php
namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Returns quiz response data including element answers, dates, and access information.
 */
class Response65Api
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
     * `true` for load answers for response, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_answer = null;

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
     * Quiz response key.
     * 
     * `null` in a case of response creation or
     * removing set of responses in [QuizResponseApi](/Core/Quiz/QuizResponse.json).
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    /**
     * Quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    /**
     * No description.
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
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_purchase_item = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_quick_config = null;

    /**
     * Response source. One of [SourceSid](#/components/schemas/Wl.Quiz.Response.SourceSid) constants.
     *
     * @var int|null
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

    /**
     * Quiz response key list.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_response_key = null;

    /**
     * User's key for the response association.
     *
     * @var string|null
     */
    public ?string $uid_link = null;

    /**
     * Quiz response key list.
     *
     * @var string|null
     */
    public ?string $json_quiz_response_key = null;

    /**
     * The mode type. One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns quiz response data including element answers, dates, and access information.
     *
     * Loads the response for the specified quiz and user, resolving answers, formatted dates, and access flags
     * such as
     * amendment availability and PDF generation support.
     *
     * @return Response65ApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): Response65ApiGetResponse
    {
        return new Response65ApiGetResponse($this->client->request('/Wl/Quiz/Response/Response65.json', $this->params(), 'GET'));
    }

    /**
     * Saves a quiz response with the given element answers.
     *
     * Validates the submitted answers and persists the response record in a transaction. If
     * [QuizResponseApi](/Core/Quiz/QuizResponse.json) is set, only validation runs and no record is created.
     * Pass [QuizResponseApi](/Core/Quiz/QuizResponse.json) to bypass validation for pre-confirmed responses.
     *
     * @return Response65ApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): Response65ApiPostResponse
    {
        return new Response65ApiPostResponse($this->client->request('/Wl/Quiz/Response/Response65.json', $this->params(), 'POST'));
    }

    /**
     * Validates, updates and reindex response information for associated user.
     *
     * Used to amend an already-submitted response, for example when a business allows clients to
     * edit their quiz answers after submission. Re-links the response to its owner and triggers
     * downstream reindexing so search and reporting stay consistent.
     *
     * @return Response65ApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): Response65ApiPutResponse
    {
        return new Response65ApiPutResponse($this->client->request('/Wl/Quiz/Response/Response65.json', $this->params(), 'PUT'));
    }

    /**
     * Deletes the specified quiz response or list of responses for the given business.
     *
     * Validates access privileges and removes the specified response records, updating any related search indexes
     * and activity logs.
     *
     * @return Response65ApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): Response65ApiDeleteResponse
    {
        return new Response65ApiDeleteResponse($this->client->request('/Wl/Quiz/Response/Response65.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'can_anonymous' => $this->can_anonymous,
            'is_answer' => $this->is_answer,
            'is_backend' => $this->is_backend,
            'is_simple' => $this->is_simple,
            'k_business' => $this->k_business,
            'k_quiz_response' => $this->k_quiz_response,
            'k_quiz' => $this->k_quiz,
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
            'a_quiz_response_key' => $this->a_quiz_response_key,
            'uid_link' => $this->uid_link,
            'json_quiz_response_key' => $this->json_quiz_response_key,
            'id_mode' => $this->id_mode,
            ],
            static fn($v) => $v !== null
        );
    }
}
