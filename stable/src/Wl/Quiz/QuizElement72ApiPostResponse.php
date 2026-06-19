<?php
namespace WlSdk\Wl\Quiz;

/**
 * Response from POST
 */
class QuizElement72ApiPostResponse
{
    /**
     * Quiz key.
     *
     * @var string|null
     */
    public ?string $k_quiz = null;

    public function __construct(array $data)
    {
        $this->k_quiz = isset($data['k_quiz']) ? (string)$data['k_quiz'] : null;
    }
}
