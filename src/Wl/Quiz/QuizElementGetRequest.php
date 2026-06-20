<?php
namespace WlSdk\Wl\Quiz;

class QuizElementGetRequest
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
     * @var \WlSdk\RsPurchaseItemSid|null
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

    public function params(): array
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
            ],
            static fn($v) => $v !== null
        );
    }
}
