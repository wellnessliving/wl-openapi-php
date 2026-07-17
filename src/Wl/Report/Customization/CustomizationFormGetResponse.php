<?php

namespace WlSdk\Wl\Report\Customization;

/**
 * Response from GET
 */
class CustomizationFormGetResponse
{
    /**
     * Customization form data keyed by report or page CID. Each value has the following structure:
     *
     * @var CustomizationFormGetResponseCustomizationForm|null
     */
    public ?CustomizationFormGetResponseCustomizationForm $a_customization_form = null;

    public function __construct(array $data)
    {
        $this->a_customization_form = isset($data['a_customization_form']) ? new CustomizationFormGetResponseCustomizationForm((array)$data['a_customization_form']) : null;
    }
}
