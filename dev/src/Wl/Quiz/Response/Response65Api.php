<?php
namespace WlSdk\Wl\Quiz\Response;

use WlSdk\WlSdkClient;

/**
 * Returns quiz response data including element answers, dates, and access information.
 */
class Response65Api
{
    /**
     * Custom rules for mapping API error status codes to HTTP status codes.

By default the API always returns HTTP 200, even when the response contains an error. Setting this header enables error-to-HTTP-code conversion: when the response status matches a rule, the corresponding 4xx code is returned instead of 200.

Format: comma-separated entries of `{4xx_code} {pattern}[, ...]`. Pattern syntax:
- `status` - exact status match.
- `-suffix` - status ends with `-suffix`.
- `-part-` - status contains `-part-`.
- `prefix-` - status starts with `prefix-`.
- `-` - catch-all for any non-ok status that did not match any other rule.

The special entry `default` (no HTTP code prefix) expands to the built-in ruleset at that position: `400 -`, `403 -access access access-`, `404 -nx`. Rules listed before `default` override the built-in ones; rules after are fallbacks. Example: `401 access,403 access-,404 -nx,default`.

Only standard 4xx codes are accepted.
     *
     * @var string|null
     */
    public ?string $X-Error-Rules = null;

    /**
     * Checks whether unauthorized user should be permitted to operate with form and make a response.
In general all quizzes should have users in response but it some cases such as registration process
 user might not exist yet, and we need ability to ignore check for user existence.
`true` - add possibility load form and accept response for non-registered user, `false` otherwise.
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

`true` quiz response received by kiosk mode.
`false` quiz response received by direct or direct mode.
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

`null` in a case of response creation or
removing set of responses in [QuizResponseApi](/Core/Quiz/QuizResponse.json).
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
Not `null` if quiz response was sent during booking appointment process.
     *
     * @var string|null
     */
    public ?string $text_appointment_wizard_id = null;

    /**
     * Booking class wizard ID.
Not `null` if quiz response was sent during booking class process.
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
     * @return array Parsed JSON response data.
     *   - array[] a_access_log: No description.
     *   - array[] a_element: No description.
     *   - array[] a_service_info: No description.
     *   - bool can_amend: Whether response can be amended by current user.
     *   - string dtu_response: Date when response was submitted.
     *   - int id_source: Response source. One of [SourceSid](#/components/schemas/Wl.Quiz.Response.SourceSid) constants.
     *   - int id_status: Response status ID.
     *   - bool show_numbering: Whether to show numbering of the form elements that supports numbering.

`true` to show numbering on the form for elements that supports numbering.
`false` to not show numbering.
     *   - string text_add_date: Date when response added.
     *   - string text_amend_date: Date when response amended.
     *   - string text_amend_user: Name of the user who amend the response.
     *   - string text_complete_date: Date when response completed.
     *   - string text_complete_user: Name of the user who complete the response.
     *   - string text_response_by: Name of the user who owned the response.
     *   - string text_title: Title of the filled form.

`null` in case when not filled yet.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): array
    {
        return $this->client->request('/Wl/Quiz/Response/Response65.json', $this->params(), 'GET');
    }

    /**
     * Saves a quiz response with the given element answers.
     *
     * Validates the submitted answers and persists the response record in a transaction. If
     * [QuizResponseApi](/Core/Quiz/QuizResponse.json) is set, only validation runs and no record is created.
     * Pass [QuizResponseApi](/Core/Quiz/QuizResponse.json) to bypass validation for pre-confirmed responses.
     *
     * @return array Parsed JSON response data.
     *   - string k_quiz_response: Quiz response key.

`null` in a case of response creation or
removing set of responses in [QuizResponseApi](/Core/Quiz/QuizResponse.json).
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): array
    {
        return $this->client->request('/Wl/Quiz/Response/Response65.json', $this->params(), 'POST');
    }

    /**
     * Validates, updates and reindex response information for associated user.
     *
     * Used to amend an already-submitted response, for example when a business allows clients to
     * edit their quiz answers after submission. Re-links the response to its owner and triggers
     * downstream reindexing so search and reporting stay consistent.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): array
    {
        return $this->client->request('/Wl/Quiz/Response/Response65.json', $this->params(), 'PUT');
    }

    /**
     * Deletes the specified quiz response or list of responses for the given business.
     *
     * Validates access privileges and removes the specified response records, updating any related search indexes
     * and activity logs.
     *
     * @return array Parsed JSON response data.
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): array
    {
        return $this->client->request('/Wl/Quiz/Response/Response65.json', $this->params(), 'DELETE');
    }

    private function params(): array
    {
        return array_filter(
            [
            'X-Error-Rules' => $this->X-Error-Rules,
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
