<?php

namespace WlSdk\Wl\Appointment\Book\Question;

class QuestionPostRequest
{
    /**
     * The list of answers for questions
     *
     * * Key is a question hash from {@link \WlSdk\Wl\Appointment\Book\Question\QuestionGetResponse::$a_question}.
     * * Value is the answer text for that question.
     *
     * @var string[]|null
     */
    public ?array $a_answer = null;

    /**
     * Appointment key to save answers for.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_answer' => $this->a_answer,
            'k_appointment' => $this->k_appointment,
            ],
            static fn ($v) => $v !== null
        );
    }
}
