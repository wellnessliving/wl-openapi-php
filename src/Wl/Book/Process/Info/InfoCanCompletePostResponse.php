<?php

namespace WlSdk\Wl\Book\Process\Info;

/**
 * Response from POST
 */
class InfoCanCompletePostResponse
{
    /**
     * Determines whether users can complete the booking process from the info step.
     *
     * @var bool|null
     */
    public ?bool $can_complete = null;

    public function __construct(array $data)
    {
        $this->can_complete = isset($data['can_complete']) ? (bool)$data['can_complete'] : null;
    }
}
