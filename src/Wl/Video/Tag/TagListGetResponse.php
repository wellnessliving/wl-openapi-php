<?php
namespace WlSdk\Wl\Video\Tag;

/**
 * Response from GET
 */
class TagListGetResponse
{
    /**
     * A list of video tags with the following structure:
     *
     * @var TagListGetResponseTagList[]|null
     */
    public ?array $a_tag_list = null;

    public function __construct(array $data)
    {
        $this->a_tag_list = isset($data['a_tag_list']) ? array_map(static fn($item) => new TagListGetResponseTagList((array)$item), (array)$data['a_tag_list']) : null;
    }
}
