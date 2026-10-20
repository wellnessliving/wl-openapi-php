<?php

namespace WlSdk\Core\AI\LogTriage;

class ConnectionCheckGetRequest
{
    /**
     * Calendar date to collect findings for. Empty string selects the current UTC date.
     *
     * @var string|null
     */
    public ?string $dl_date = null;

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
            'dl_date' => $this->dl_date,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
