<?php
namespace WlSdk\Wl\Search\Tag;

/**
 * Response from GET
 */
class SearchTagListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_search_tag = null;

    public function __construct(array $data)
    {
        $this->a_search_tag = isset($data['a_search_tag']) ? (array)$data['a_search_tag'] : null;
    }
}
