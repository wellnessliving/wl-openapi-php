<?php

namespace WlSdk\Core\Jira\AI;

class JiraResultWorkPostRequest
{
    /**
     * The starting data for the Jira result work.
     *
     * @var string|null
     */
    public ?string $s_date_resolved = null;

    public function params(): array
    {
        return array_filter(
            [
            's_date_resolved' => $this->s_date_resolved,
            ],
            static fn ($v) => $v !== null
        );
    }
}
