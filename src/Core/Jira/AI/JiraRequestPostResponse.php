<?php

namespace WlSdk\Core\Jira\AI;

/**
 * Response from POST
 */
class JiraRequestPostResponse
{
    /**
     * The response message generated
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
