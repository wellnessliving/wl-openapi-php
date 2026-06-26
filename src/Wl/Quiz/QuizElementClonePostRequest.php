<?php

namespace WlSdk\Wl\Quiz;

class QuizElementClonePostRequest
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
     * Key of quiz to copy.
     *
     * @var string|null
     */
    public ?string $k_quiz_clone = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_quiz_login' => $this->k_quiz_login,
            'k_quiz_clone' => $this->k_quiz_clone,
            ],
            static fn ($v) => $v !== null
        );
    }
}
