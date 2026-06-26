<?php

namespace WlSdk\Wl\Unlayer;

class AdvancedEditorGetResponseMailVariables
{
    /**
     * An array with help data for global variables MailPattern::variablesHelpData():
     *
     * @var AdvancedEditorGetResponseMailVariablesHelpGlobal|null
     */
    public ?AdvancedEditorGetResponseMailVariablesHelpGlobal $a_help_global = null;

    /**
     * An array with help data for template-specific variables MailPattern::variablesHelpData():
     *
     * @var AdvancedEditorGetResponseMailVariablesHelp|null
     */
    public ?AdvancedEditorGetResponseMailVariablesHelp $a_help = null;

    public function __construct(array $data)
    {
        $this->a_help_global = isset($data['a_help_global']) ? new AdvancedEditorGetResponseMailVariablesHelpGlobal((array)$data['a_help_global']) : null;
        $this->a_help = isset($data['a_help']) ? new AdvancedEditorGetResponseMailVariablesHelp((array)$data['a_help']) : null;
    }
}
