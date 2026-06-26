<?php

namespace WlSdk\Core\Passport\Login\Register;

class RegisterFieldGetResponseProfileField
{
    /**
     * Title of first name field.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * Title of last name field.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    public function __construct(array $data)
    {
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_name_last = isset($data['text_name_last']) ? (string)$data['text_name_last'] : null;
    }
}
