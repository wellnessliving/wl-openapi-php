<?php

namespace WlSdk\Core\Docs\Search;

class DocsSearchGetRequest
{
    /**
     * Max count of records to be returned.
     *
     * `null` means to use default limit.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Search text.
     *
     * @var string|null
     */
    public ?string $text_search = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_limit' => $this->i_limit,
            'text_search' => $this->text_search,
            ],
            static fn ($v) => $v !== null
        );
    }
}
