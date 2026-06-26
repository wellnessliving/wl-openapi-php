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
