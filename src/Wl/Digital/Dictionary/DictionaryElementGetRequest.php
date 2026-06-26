<?php

namespace WlSdk\Wl\Digital\Dictionary;

class DictionaryElementGetRequest
{
    /**
     * Key of the word to get, change or remove.
     *
     * @var string|null
     */
    public ?string $k_digital_dictionary = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_digital_dictionary' => $this->k_digital_dictionary,
            ],
            static fn ($v) => $v !== null
        );
    }
}
