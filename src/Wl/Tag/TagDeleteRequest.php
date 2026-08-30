<?php

namespace WlSdk\Wl\Tag;

class TagDeleteRequest
{
    /**
     * The business key of the tags.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The tag key.
     *
     * Required for `delete()`. Optional for `get()`: if specified,
     * only this tag is returned; if not specified, all tags of the business are returned.
     *
     * @var string|null
     */
    public ?string $k_tag = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_tag' => $this->k_tag,
            ],
            static fn ($v) => $v !== null
        );
    }
}
