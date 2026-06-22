<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

class PatternGetResponseHelpData
{
    /**
     * An array with help data for global variables:
     *
     * @var PatternGetResponseHelpDataHelpGlobal|null
     */
    public ?PatternGetResponseHelpDataHelpGlobal $a_help_global = null;

    /**
     * An array with help data for template-specific variables:
     *
     * @var PatternGetResponseHelpDataHelp|null
     */
    public ?PatternGetResponseHelpDataHelp $a_help = null;

    public function __construct(array $data)
    {
        $this->a_help_global = isset($data['a_help_global']) ? new PatternGetResponseHelpDataHelpGlobal((array)$data['a_help_global']) : null;
        $this->a_help = isset($data['a_help']) ? new PatternGetResponseHelpDataHelp((array)$data['a_help']) : null;
    }
}
