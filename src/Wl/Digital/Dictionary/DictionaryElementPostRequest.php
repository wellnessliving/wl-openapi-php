<?php

namespace WlSdk\Wl\Digital\Dictionary;

class DictionaryElementPostRequest
{
    /**
     * Key of the word to get, change or remove.
     *
     * @var string|null
     */
    public ?string $k_digital_dictionary = null;

    /**
     * Text of the word.
     *
     * @var string|null
     */
    public ?string $text_word = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_digital_dictionary' => $this->k_digital_dictionary,
            'text_word' => $this->text_word,
            ],
            static fn ($v) => $v !== null
        );
    }
}
