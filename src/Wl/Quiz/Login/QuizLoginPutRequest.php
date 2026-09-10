<?php

namespace WlSdk\Wl\Quiz\Login;

class QuizLoginPutRequest
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
     * Passed when need change hidden status for draft response(which created from request), otherwise `null`.
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    /**
     * Whether filling out a form is obligatory and should be passed urgently.
     * `true` - obligatory, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_quiz_login' => $this->k_quiz_login,
            'k_quiz_response' => $this->k_quiz_response,
            'is_require' => $this->is_require,
            ],
            static fn ($v) => $v !== null
        );
    }
}
