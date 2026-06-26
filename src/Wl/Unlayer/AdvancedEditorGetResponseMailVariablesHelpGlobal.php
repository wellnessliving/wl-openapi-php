<?php

namespace WlSdk\Wl\Unlayer;

class AdvancedEditorGetResponseMailVariablesHelpGlobal
{
    /**
     * A variable description.
     *
     * @var string|null
     */
    public ?string $text_description = null;

    /**
     * A variable name.
     *
     * @var string|null
     */
    public ?string $text_parameter = null;

    public function __construct(array $data)
    {
        $this->text_description = isset($data['text_description']) ? (string)$data['text_description'] : null;
        $this->text_parameter = isset($data['text_parameter']) ? (string)$data['text_parameter'] : null;
    }
}
