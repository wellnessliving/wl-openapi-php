<?php

namespace WlSdk\Wl\Quiz\Response;

class Response65DeleteRequest
{
    /**
     * Quiz response key list.
     *
     * @var string[]|null
     */
    public ?array $a_quiz_response_key = null;

    /**
     * The mode type. One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

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
     * removing set of responses in [QuizResponseApi](/Core/Quiz/QuizResponse.json).
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
            'id_mode' => $this->id_mode,
            'k_business' => $this->k_business,
            'k_quiz' => $this->k_quiz,
            'k_quiz_response' => $this->k_quiz_response,
            'json_quiz_response_key' => $this->json_quiz_response_key,
            ],
            static fn ($v) => $v !== null
        );
    }
}
