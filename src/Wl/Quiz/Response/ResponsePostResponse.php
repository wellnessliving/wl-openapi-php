<?php
namespace WlSdk\Wl\Quiz\Response;

/**
 * Response from POST
 */
class ResponsePostResponse
{
    /**
     * Quiz response key.
     * 
     * `null` in a case of response creation or
     * removing set of responses in [QuizResponseApi](/Core/Quiz/QuizResponse.json).
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    public function __construct(array $data)
    {
        $this->k_quiz_response = isset($data['k_quiz_response']) ? (string)$data['k_quiz_response'] : null;
    }
}
