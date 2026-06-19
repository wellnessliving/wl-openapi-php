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
     * @var array[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
    }
}
