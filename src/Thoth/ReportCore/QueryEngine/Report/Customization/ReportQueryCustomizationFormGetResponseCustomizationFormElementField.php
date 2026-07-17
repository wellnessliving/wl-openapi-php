<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report\Customization;

class ReportQueryCustomizationFormGetResponseCustomizationFormElementField
{
    /**
     * Localized field title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Current field value.
     *
     * @var string|null
     */
    public ?string $x_value = null;

    public function __construct(array $data)
    {
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->x_value = isset($data['x_value']) ? (string)$data['x_value'] : null;
    }
}
