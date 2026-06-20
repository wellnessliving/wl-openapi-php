<?php

namespace WlSdk\Wl\Quiz;

class QuizElementPostRequest
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
     * Quiz login key.
     *
     * @var string|null
     */
    public ?string $k_quiz_login = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'can_anonymous' => $this->can_anonymous,
            'is_simple' => $this->is_simple,
            'k_business' => $this->k_business,
            'k_quiz' => $this->k_quiz,
            'k_quiz_login' => $this->k_quiz_login,
            'a_element' => $this->a_element,
            'a_setting' => $this->a_setting,
            'is_active' => $this->is_active,
            'json_element' => $this->json_element,
            'k_business_type' => $this->k_business_type,
            'show_numbering' => $this->show_numbering,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
