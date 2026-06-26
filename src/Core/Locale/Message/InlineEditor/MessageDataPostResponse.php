<?php

namespace WlSdk\Core\Locale\Message\InlineEditor;

/**
 * Response from POST
 */
class MessageDataPostResponse
{
    /**
     * Information about translated messages. Key is source of translated message. Value is an array where key is
     * language ID and value is translation into given language.
     *
     * @var array|null
     */
    public ?array $a_translate = null;

    public function __construct(array $data)
    {
        $this->a_translate = isset($data['a_translate']) ? (array)$data['a_translate'] : null;
    }
}
