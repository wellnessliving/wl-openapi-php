<?php

namespace WlSdk\Wl\Profile\Form\Registration;

/**
 * Response from GET
 */
class RegistrationListGetResponse
{
    /**
     * Require and optional to completion forms. Each element has the next structure:
     *
     * @var RegistrationListGetResponseQuiz[]|null
     */
    public ?array $a_quiz = null;

    public function __construct(array $data)
    {
        $this->a_quiz = isset($data['a_quiz']) ? array_map(static fn ($item) => new RegistrationListGetResponseQuiz((array)$item), (array)$data['a_quiz']) : null;
    }
}
