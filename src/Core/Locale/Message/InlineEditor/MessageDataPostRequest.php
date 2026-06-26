<?php

namespace WlSdk\Core\Locale\Message\InlineEditor;

class MessageDataPostRequest
{
    /**
     * A list of sources of translated messages to retrieve information about.
     *
     * In a case there are many messages, JSON-encoded string can be passed here.
     *
     * @var string[]|string|null
     */
    public $a_source = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_source' => $this->a_source,
            ],
            static fn ($v) => $v !== null
        );
    }
}
