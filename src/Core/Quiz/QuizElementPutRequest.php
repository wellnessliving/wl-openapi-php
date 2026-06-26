<?php

namespace WlSdk\Core\Quiz;

class QuizElementPutRequest
{
    /**
     * Quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    /**
     * Quiz active status.
     *
     * `true` if quiz is active.
     * `false` if quiz is not active.
     *
     * @var bool|null
     */
    public ?bool $is_active = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_quiz' => $this->k_quiz,
            'is_active' => $this->is_active,
            ],
            static fn ($v) => $v !== null
        );
    }
}
