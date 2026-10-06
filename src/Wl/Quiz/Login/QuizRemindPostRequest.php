<?php

namespace WlSdk\Wl\Quiz\Login;

class QuizRemindPostRequest
{
    /**
     * Business key within which quiz is managed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Quiz login key.
     *
     * @var string|null
     */
    public ?string $k_quiz_login = null;

    /**
     * Quiz response key.
     *
     * Passed when need send reminder for draft response(which created from request), otherwise `null`.
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_quiz_login' => $this->k_quiz_login,
            'k_quiz_response' => $this->k_quiz_response,
            ],
            static fn ($v) => $v !== null
        );
    }
}
