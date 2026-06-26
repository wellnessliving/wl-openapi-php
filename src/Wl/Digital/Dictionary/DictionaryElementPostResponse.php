<?php

namespace WlSdk\Wl\Digital\Dictionary;

/**
 * Response from POST
 */
class DictionaryElementPostResponse
{
    /**
     * Key of the word to get, change or remove.
     *
     * @var string|null
     */
    public ?string $k_digital_dictionary = null;

    public function __construct(array $data)
    {
        $this->k_digital_dictionary = isset($data['k_digital_dictionary']) ? (string)$data['k_digital_dictionary'] : null;
    }
}
