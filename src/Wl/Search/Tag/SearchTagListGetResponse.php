<?php

namespace WlSdk\Wl\Search\Tag;

/**
 * Response from GET
 */
class SearchTagListGetResponse
{
    /**
     * A list of all the search tags.
     *
     * Each element is an array with the following keys:
     *
     * @var SearchTagListGetResponseSearchTag[]|null
     */
    public ?array $a_search_tag = null;

    public function __construct(array $data)
    {
        $this->a_search_tag = isset($data['a_search_tag']) ? array_map(static fn ($item) => new SearchTagListGetResponseSearchTag((array)$item), (array)$data['a_search_tag']) : null;
    }
}
