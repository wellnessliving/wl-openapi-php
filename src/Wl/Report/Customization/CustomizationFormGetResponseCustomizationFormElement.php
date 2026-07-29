<?php

namespace WlSdk\Wl\Report\Customization;

class CustomizationFormGetResponseCustomizationFormElement
{
    /**
     * Element fields keyed by field alias. Each field has the following structure:
     *
     * @var CustomizationFormGetResponseCustomizationFormElementField|null
     */
    public ?CustomizationFormGetResponseCustomizationFormElementField $a_field = null;

    /**
     * Report CID list the element applies to.
     *
     * @var int[]|null
     */
    public ?array $a_report = null;

    /**
     * Localized element title.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * Localized element tooltip.
     *
     * @var string|null
     */
    public ?string $html_title_tooltip = null;

    public function __construct(array $data)
    {
        $this->a_field = isset($data['a_field']) ? new CustomizationFormGetResponseCustomizationFormElementField((array)$data['a_field']) : null;
        $this->a_report = isset($data['a_report']) ? (array)$data['a_report'] : null;
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->html_title_tooltip = isset($data['html_title_tooltip']) ? (string)$data['html_title_tooltip'] : null;
    }
}
