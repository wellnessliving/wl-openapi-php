<?php

namespace WlSdk\Wl\Appointment\Book\Question;

class QuestionGetRequest
{
    /**
     * Appointment key used to load or save question answers.
     *
     * Optional for question loading.
     * When provided, access is validated and `has_answer` is calculated from stored appointment answers.
     *
     * Required for answer saving.
     * Identifies the appointment where answers are saved after access validation.
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
