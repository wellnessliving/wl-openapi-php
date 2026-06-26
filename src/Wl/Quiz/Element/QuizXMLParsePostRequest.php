<?php

namespace WlSdk\Wl\Quiz\Element;

class QuizXMLParsePostRequest
{
    /**
     * Fields to be XML parsed.
     * Keys are field names that prefixed with xml_.
     * Values are XML strings to be parsed and converted to HTML.
     *
     * @var array|null
     */
    public ?array $a_fields = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_fields' => $this->a_fields,
            ],
            static fn ($v) => $v !== null
        );
    }
}
