<?php

namespace WlSdk\Core\AI\LogTriage;

class ConnectionCheckGetRequest
{
    /**
     * IDs of finding sources from {@link \WlSdk\Core\AI\LogTriage\TriageSourceSid}.
     *
     * @var int[]|null
     */
    public ?array $a_id_source = null;

    /**
     * `true` returns findings; otherwise `false` performs only the connection check.
     *
     * @var bool|null
     */
    public ?bool $is_finding = null;

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
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_id_source' => $this->a_id_source,
            'is_finding' => $this->is_finding,
            's_date_mask' => $this->s_date_mask,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
