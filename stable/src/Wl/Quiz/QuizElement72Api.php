<?php
namespace WlSdk\Wl\Quiz;

use WlSdk\WlSdkClient;

/**
 * Returns quiz element data including settings, elements, and access information for the given quiz.
 */
class QuizElement72Api
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
     * `true` for request quiz from form builder page, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_builder = null;

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
     * List of purchase items for which this form is loaded in JSON format.
     * 
     * This variable supports two structures:
     * 
     * New structure:
     * Each element key has the format `[id_purchase_item]::[k_id]`, where: 
     * 
     * Old structure:
     * Each element is a string in the format `[id_purchase_item]::[k_id]`.
     * 
     * Empty in case when purchase item not specified or form loaded from direct link.
     *
     * @var int|null
     */
    public $json_purchase_item = null;

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
     * Quiz login key.
     *
     * @var string|null
     */
    public ?string $k_quiz_login = null;

    /**
     * UID of the client for which quiz requested.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_element = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_setting = null;

    /**
     * Quiz active status.
     * 
     * `true` if quiz is active.
     * `false` if quiz is not active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * List of quiz elements in json format.
     * 
     * Order of the element in array corresponds to order of elements on the form.
     *
     * @var string|null
     */
    public ?string $json_element = null;

    /**
     * Business type key. Used only for forms in the system business.
     * 
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $k_business_type = null;

    /**
     * Whether to show numbering of the form elements that supports numbering.
     * 
     * `true` to show numbering on the form for elements that supports numbering.
     * `false` to not show numbering.
     *
     * @var bool|null
     */
    public ?bool $show_numbering = null;

    /**
     * Quiz form title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns quiz element data including settings, elements, and access information for the given quiz.
     *
     * Loads the quiz configuration, element list, and access log for the specified business and user context,
     * applying franchise and privilege checks before returning the result.
     *
     * @return QuizElement72ApiGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(): QuizElement72ApiGetResponse
    {
        return new QuizElement72ApiGetResponse($this->client->request('/Wl/Quiz/QuizElement72.json', $this->params(), 'GET'));
    }

    /**
     * Creates or updates a quiz with the given elements and settings.
     *
     * When no quiz key is provided, a new quiz is created; when a key is given, the existing quiz
     * is updated in place. Element list and configuration are saved in a single transaction.
     *
     * @return QuizElement72ApiPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(): QuizElement72ApiPostResponse
    {
        return new QuizElement72ApiPostResponse($this->client->request('/Wl/Quiz/QuizElement72.json', $this->params(), 'POST'));
    }

    /**
     * Updates the active status of the given quiz.
     *
     * Toggles whether the quiz is available for respondents to fill out. Inactive quizzes are hidden
     * from the booking and profile flows but their existing responses are preserved.
     *
     * @return QuizElement72ApiPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(): QuizElement72ApiPutResponse
    {
        return new QuizElement72ApiPutResponse($this->client->request('/Wl/Quiz/QuizElement72.json', $this->params(), 'PUT'));
    }

    /**
     * Deletes the quiz with the given key.
     *
     * Permanently removes the quiz and all associated elements.
     *
     * @return QuizElement72ApiDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(): QuizElement72ApiDeleteResponse
    {
        return new QuizElement72ApiDeleteResponse($this->client->request('/Wl/Quiz/QuizElement72.json', $this->params(), 'DELETE'));
    }

    private function params(): array
    {
        return array_filter(
            [
            'can_anonymous' => $this->can_anonymous,
            'is_builder' => $this->is_builder,
            'is_simple' => $this->is_simple,
            'json_purchase_item' => $this->json_purchase_item,
            'k_business' => $this->k_business,
            'k_quiz' => $this->k_quiz,
            'k_quiz_login' => $this->k_quiz_login,
            'uid_client' => $this->uid_client,
            'a_element' => $this->a_element,
            'a_setting' => $this->a_setting,
            'is_active' => $this->is_active,
            'json_element' => $this->json_element,
            'k_business_type' => $this->k_business_type,
            'show_numbering' => $this->show_numbering,
            'text_title' => $this->text_title,
            ],
            static fn($v) => $v !== null
        );
    }
}
