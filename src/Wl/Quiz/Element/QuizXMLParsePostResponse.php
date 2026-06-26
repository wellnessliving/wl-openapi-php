<?php

namespace WlSdk\Wl\Quiz\Element;

/**
 * Response from POST
 */
class QuizXMLParsePostResponse
{
    /**
     * Fields that were XML parsed.
     * Keys are field names that prefixed with html_.
     * Values are HTML strings.
     *
     * @var array|null
     */
    public ?array $a_results = null;

    public function __construct(array $data)
    {
        $this->a_results = isset($data['a_results']) ? (array)$data['a_results'] : null;
    }
}
