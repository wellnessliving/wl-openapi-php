<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report\Customization;

class ReportQueryCustomizationFormGetResponseCustomizationForm
{
    /**
     * Form elements keyed by element name. Each element has the following structure:
     *
     * @var ReportQueryCustomizationFormGetResponseCustomizationFormElement|null
     */
    public ?ReportQueryCustomizationFormGetResponseCustomizationFormElement $a_element = null;

    /**
     * Form class identifier.
     *
     * @var string|null
     */
    public ?string $s_form = null;

    public function __construct(array $data)
    {
        $this->a_element = isset($data['a_element']) ? new ReportQueryCustomizationFormGetResponseCustomizationFormElement((array)$data['a_element']) : null;
        $this->s_form = isset($data['s_form']) ? (string)$data['s_form'] : null;
    }
}
