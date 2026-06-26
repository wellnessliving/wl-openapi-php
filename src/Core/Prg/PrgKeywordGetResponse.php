<?php

namespace WlSdk\Core\Prg;

/**
 * Response from GET
 */
class PrgKeywordGetResponse
{
    /**
     * List of keywords.
     *
     * @var array|null
     */
    public ?array $a_keyword = null;

    public function __construct(array $data)
    {
        $this->a_keyword = isset($data['a_keyword']) ? (array)$data['a_keyword'] : null;
    }
}
