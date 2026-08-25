<?php

namespace WlSdk\Wl\Report\Customization;

class CustomizationFormGetResponseCustomizationForm
{
    /**
     * Form elements keyed by element name. Each element has the following structure:
     *
     * @var CustomizationFormGetResponseCustomizationFormElement|null
     */
    public ?CustomizationFormGetResponseCustomizationFormElement $a_element = null;

    /**
     * Form class identifier.
     *
     * @var string|null
     */
    public ?string $s_form = null;

    public function __construct(array $data)
    {
        $this->a_element = isset($data['a_element']) ? new CustomizationFormGetResponseCustomizationFormElement((array)$data['a_element']) : null;
        $this->s_form = isset($data['s_form']) ? (string)$data['s_form'] : null;
    }
}
