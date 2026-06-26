<?php

namespace WlSdk\Wl\Digital\Dictionary;

/**
 * Response from GET
 */
class DictionaryElementGetResponse
{
    /**
     * Text of the word.
     *
     * @var string|null
     */
    public ?string $text_word = null;

    public function __construct(array $data)
    {
        $this->text_word = isset($data['text_word']) ? (string)$data['text_word'] : null;
    }
}
