<?php

namespace WlSdk\Wl\Mail\Pattern;

class PatternVariableGetResponseVariable
{
    /**
     * Whether variable global or template specific.
     *
     * @var bool|null
     */
    public ?bool $is_global = null;

    /**
     * Variable description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * Variable field name.
     *
     * @var string|null
     */
    public ?string $text_field = null;

    /**
     * Variable name.
     *
     * @var string|null
     */
    public ?string $text_parameter = null;

    public function __construct(array $data)
    {
        $this->is_global = isset($data['is_global']) ? (bool)$data['is_global'] : null;
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_field = isset($data['text_field']) ? (string)$data['text_field'] : null;
        $this->text_parameter = isset($data['text_parameter']) ? (string)$data['text_parameter'] : null;
    }
}
