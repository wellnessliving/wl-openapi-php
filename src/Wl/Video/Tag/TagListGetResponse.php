<?php
namespace WlSdk\Wl\Video\Tag;

/**
 * Response from GET
 */
class TagListGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_tag_list = null;

    public function __construct(array $data)
    {
        $this->a_tag_list = isset($data['a_tag_list']) ? (array)$data['a_tag_list'] : null;
    }
}
