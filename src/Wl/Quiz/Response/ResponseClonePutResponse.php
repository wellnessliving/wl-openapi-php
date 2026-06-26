<?php

namespace WlSdk\Wl\Quiz\Response;

/**
 * Response from PUT
 */
class ResponseClonePutResponse
{
    /**
     * Quiz response key.
     *
     * @var string|null
     */
    public ?string $k_quiz_response = null;

    public function __construct(array $data)
    {
        $this->k_quiz_response = isset($data['k_quiz_response']) ? (string)$data['k_quiz_response'] : null;
    }
}
