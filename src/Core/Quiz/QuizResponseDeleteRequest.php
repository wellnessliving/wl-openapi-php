<?php

namespace WlSdk\Core\Quiz;

class QuizResponseDeleteRequest
{
    /**
     * Quiz response key list.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_response_key = null;

    /**
     * Quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    /**
     * Quiz response key.
     *
     * `null` in a case of response creation or
     * removing set of responses in `a_quiz_response_key`.
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    /**
     * Quiz response key list.
     *
     * @var string|null
     */
    public ?string $json_quiz_response_key = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_quiz_response_key' => $this->a_quiz_response_key,
            'k_quiz' => $this->k_quiz,
            'k_quiz_response' => $this->k_quiz_response,
            'json_quiz_response_key' => $this->json_quiz_response_key,
            ],
            static fn ($v) => $v !== null
        );
    }
}
