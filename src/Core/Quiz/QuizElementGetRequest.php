<?php

namespace WlSdk\Core\Quiz;

class QuizElementGetRequest
{
    /**
     * Quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_quiz' => $this->k_quiz,
            ],
            static fn ($v) => $v !== null
        );
    }
}
