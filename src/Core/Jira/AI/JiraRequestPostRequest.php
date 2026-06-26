<?php

namespace WlSdk\Core\Jira\AI;

class JiraRequestPostRequest
{
    /**
     * The email address associated with the request
     *
     * @var string|null
     */
    public ?string $s_email = null;

    public function params(): array
    {
        return array_filter(
            [
            's_email' => $this->s_email,
            ],
            static fn ($v) => $v !== null
        );
    }
}
