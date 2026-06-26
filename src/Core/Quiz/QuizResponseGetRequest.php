<?php

namespace WlSdk\Core\Quiz;

class QuizResponseGetRequest
{
    /**
     * `true` for load answers for response, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_answer = null;

    /**
     * Quiz response key.
     *
     * `null` in a case of response creation or
     * removing set of responses in `a_quiz_response_key`.
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_answer' => $this->is_answer,
            'k_quiz_response' => $this->k_quiz_response,
            ],
            static fn ($v) => $v !== null
        );
    }
}
