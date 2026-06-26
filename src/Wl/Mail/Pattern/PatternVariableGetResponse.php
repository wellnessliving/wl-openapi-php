<?php

namespace WlSdk\Wl\Mail\Pattern;

/**
 * Response from GET
 */
class PatternVariableGetResponse
{
    /**
     * List of template variables. Each element is array:
     *
     * @var PatternVariableGetResponseVariable|null
     */
    public ?PatternVariableGetResponseVariable $a_variable = null;

    public function __construct(array $data)
    {
        $this->a_variable = isset($data['a_variable']) ? new PatternVariableGetResponseVariable((array)$data['a_variable']) : null;
    }
}
