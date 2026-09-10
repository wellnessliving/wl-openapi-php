<?php

namespace WlSdk\Wl\Quiz\Login;

class QuizLoginPostRequest
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
    public ?string $k_quiz = null;

    /**
     * Quiz login key.
     *
     * @var string|null
     */
    public ?string $k_quiz_login = null;

    /**
     * List of quizzes keys.
     *
     * `null` when we do not send data from frontend and send `k_quiz` instead.
     *
     * @var string[]|null
     */
    public ?array $a_quiz = null;

    /**
     * Visit key.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * UID of the client.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_quiz' => $this->k_quiz,
            'k_quiz_login' => $this->k_quiz_login,
            'a_quiz' => $this->a_quiz,
            'k_visit' => $this->k_visit,
            'uid_client' => $this->uid_client,
            ],
            static fn ($v) => $v !== null
        );
    }
}
