<?php

namespace WlSdk\Wl\Appointment\WaitList;

class AppointmentWaitListGetResponseWaitAnswer
{
    /**
     * Answer.
     *
     * @var string|null
     */
    public ?string $text_answer = null;

    /**
     * Question.
     *
     * @var string|null
     */
    public ?string $text_question = null;

    public function __construct(array $data)
    {
        $this->text_answer = isset($data['text_answer']) ? (string)$data['text_answer'] : null;
        $this->text_question = isset($data['text_question']) ? (string)$data['text_question'] : null;
    }
}
