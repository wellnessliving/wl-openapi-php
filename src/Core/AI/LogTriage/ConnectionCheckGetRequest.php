<?php

namespace WlSdk\Core\AI\LogTriage;

class ConnectionCheckGetRequest
{
    /**
     * Whether log findings must be returned.
     *
     * @var bool|null
     */
    public ?bool $is_log = null;

    /**
     * Date/time mask accepted by LogSearchQuery.
     *
     * Empty string selects the current UTC date.
     *
     * @var string|null
     */
    public ?string $s_date_mask = null;

    /**
     * Optional case-insensitive message substring.
     *
     * @var string|null
     */
    public ?string $s_search = null;

    /**
     * Log source: `all`, `error`, or `slow`.
     *
     * @var string|null
     */
    public ?string $s_source = 'all';

    public function params(): array
    {
        return array_filter(
            [
            'is_log' => $this->is_log,
            's_date_mask' => $this->s_date_mask,
            's_search' => $this->s_search,
            's_source' => $this->s_source,
            ],
            static fn ($v) => $v !== null
        );
    }
}
