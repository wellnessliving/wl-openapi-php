<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

class PatternGetResponseHelpDataHelp
{
    /**
     * A variable description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Field name.
     *
     * @var string|null
     */
    public ?string $text_field = null;

    /**
     * A variable name.
     *
     * @var string|null
     */
    public ?string $text_parameter = null;

    public function __construct(array $data)
    {
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_field = isset($data['text_field']) ? (string)$data['text_field'] : null;
        $this->text_parameter = isset($data['text_parameter']) ? (string)$data['text_parameter'] : null;
    }
}
