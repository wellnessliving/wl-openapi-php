<?php

namespace WlSdk\Core\Async\QueueServer;

class StatFunctionGetRequest
{
    /**
     * Whether show all scopes.
     *
     * `true` - all scopes are shown, and scope search is performed by string.
     * `false` - only the current scope is shown.
     *
     * @var bool|null
     */
    public ?bool $is_all_scopes = null;

    /**
     * Name of a provider which information should be shown.
     *
     * @var string|null
     */
    public ?string $s_provider = null;

    /**
     * Search substring for scopes.
     * Empty string - without filtration.
     *
     * @var string|null
     */
    public ?string $s_scope_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_all_scopes' => $this->is_all_scopes,
            's_provider' => $this->s_provider,
            's_scope_search' => $this->s_scope_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
