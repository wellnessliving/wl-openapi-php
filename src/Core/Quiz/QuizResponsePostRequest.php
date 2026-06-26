<?php

namespace WlSdk\Core\Quiz;

class QuizResponsePostRequest
{
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
     * List of quiz questions with responses.
     *
     * @var array[]|null
     */
    public ?array $a_element = null;

    /**
     * Elements' uploaded files.
     *
     * @var string|null
     */
    public ?string $a_element_file = null;

    /**
     * `true` if need to save response in draft mode, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_draft = null;

    /**
     * Whether the quiz needs to be skipped.
     *
     * @var bool|null
     */
    public ?bool $is_skip = null;

    /**
     * `true` if need make only validation, `false` need make validation and saving response.
     *
     * @var bool|null
     */
    public ?bool $is_validate_only = null;

    /**
     * List of quiz questions with responses in JSON format.
     *
     * @var string|null
     */
    public ?string $json_element = null;

    /**
     * UID of the user who makes response for quiz.
     *
     * @var string|null
     */
    public ?string $uid_response = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_quiz' => $this->k_quiz,
            'k_quiz_response' => $this->k_quiz_response,
            'a_element' => $this->a_element,
            'a_element_file' => $this->a_element_file,
            'is_draft' => $this->is_draft,
            'is_skip' => $this->is_skip,
            'is_validate_only' => $this->is_validate_only,
            'json_element' => $this->json_element,
            'uid_response' => $this->uid_response,
            ],
            static fn ($v) => $v !== null
        );
    }
}
