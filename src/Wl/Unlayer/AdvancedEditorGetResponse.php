<?php

namespace WlSdk\Wl\Unlayer;

/**
 * Response from GET
 */
class AdvancedEditorGetResponse
{
    /**
     * Array with all mail variables.
     * An array with help data for global and template-specific variables:
     *
     * @var AdvancedEditorGetResponseMailVariables[]|null
     */
    public ?array $a_mail_variables = null;

    public function __construct(array $data)
    {
        $this->a_mail_variables = isset($data['a_mail_variables']) ? array_map(static fn ($item) => new AdvancedEditorGetResponseMailVariables((array)$item), (array)$data['a_mail_variables']) : null;
    }
}
