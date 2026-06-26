<?php

namespace WlSdk\Wl\Report\Customization;

/**
 * Response from GET
 */
class CustomizationFormGetResponse
{
    /**
     * Customization form data.
     * See CustomizationFormAbstract::toArray() for details.
     *
     * @var array|null
     */
    public ?array $a_customization_form = null;

    public function __construct(array $data)
    {
        $this->a_customization_form = isset($data['a_customization_form']) ? (array)$data['a_customization_form'] : null;
    }
}
