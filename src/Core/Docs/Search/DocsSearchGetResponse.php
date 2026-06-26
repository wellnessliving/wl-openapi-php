<?php

namespace WlSdk\Core\Docs\Search;

/**
 * Response from GET
 */
class DocsSearchGetResponse
{
    /**
     * List of found docs.
     *
     * @var array[]|null
     */
    public ?array $a_docs = null;

    public function __construct(array $data)
    {
        $this->a_docs = isset($data['a_docs']) ? (array)$data['a_docs'] : null;
    }
}
