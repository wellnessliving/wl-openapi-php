<?php
namespace WlSdk\Wl\Tag;

/**
 * Response from POST
 */
class TagListPostResponse
{
    /**
     * No description.
     *
     * @var TagListPostResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn($item) => new TagListPostResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
