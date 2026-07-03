<?php

namespace WlSdk\Wl\Quiz\Response;

class Response65PutRequest
{
    /**
     * Quiz response key list.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_response_key = null;

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
     * Quiz response key.
     *
     * `null` in a case of response creation or
     * removing set of responses in QuizResponseApi.
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    /**
     * User's key for the response association.
     *
     * @var string|null
     */
    public ?string $uid_link = null;

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
            'k_business' => $this->k_business,
            'k_quiz' => $this->k_quiz,
            'k_quiz_response' => $this->k_quiz_response,
            'uid_link' => $this->uid_link,
            'json_quiz_response_key' => $this->json_quiz_response_key,
            ],
            static fn ($v) => $v !== null
        );
    }
}
