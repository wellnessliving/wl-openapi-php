<?php

namespace WlSdk\Wl\Appointment\Book\Question;

class QuestionGetRequest
{
    /**
     * Appointment key to save answers for.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * The service key used for retrieving questions.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_appointment' => $this->k_appointment,
            'k_service' => $this->k_service,
            ],
            static fn ($v) => $v !== null
        );
    }
}
