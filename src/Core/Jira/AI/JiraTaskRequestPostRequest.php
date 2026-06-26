<?php

namespace WlSdk\Core\Jira\AI;

class JiraTaskRequestPostRequest
{
    /**
     * The endpoint for Jira task requests.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    public function params(): array
    {
        return array_filter(
            [
            's_key' => $this->s_key,
            ],
            static fn ($v) => $v !== null
        );
    }
}
