<?php

namespace WlSdk\Wl\Tag;

/**
 * Response from GET
 */
class TagGetResponse
{
    /**
     * The revenue categories (tags) of the business.
     *
     * Keys refer to tag keys . Values have the next structure:
     *
     * @var TagGetResponseTag[]|null
     */
    public ?array $a_tag = null;

    public function __construct(array $data)
    {
        $this->a_tag = isset($data['a_tag']) ? array_map(static fn ($item) => new TagGetResponseTag((array)$item), (array)$data['a_tag']) : null;
    }
}
