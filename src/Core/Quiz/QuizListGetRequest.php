<?php

namespace WlSdk\Core\Quiz;

class QuizListGetRequest
{
    /**
     * Whether to show active or inactive quizzes.
     *
     * Each element should be one of {@link \WlSdk\Core\Sid\YesNoSid} constants.
     *
     * @var int[]|null
     */
    public ?array $a_active_id = null;

    /**
     * Filter phrase to filter quizzes by name.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_active_id' => $this->a_active_id,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
