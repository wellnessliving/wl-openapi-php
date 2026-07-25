<?php

namespace WlSdk\Wl\Quiz\Response;

class Response65GetRequest
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
    public ?bool $is_answer = true;

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
     * removing set of responses in QuizResponseApi::$a_quiz_response_key.
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    public function params(): array
    {
        return array_filter(
            [
            'can_anonymous' => $this->can_anonymous,
            'is_answer' => $this->is_answer,
            'is_backend' => $this->is_backend,
            'is_simple' => $this->is_simple,
            'k_business' => $this->k_business,
            'k_quiz_response' => $this->k_quiz_response,
            ],
            static fn ($v) => $v !== null
        );
    }
}
