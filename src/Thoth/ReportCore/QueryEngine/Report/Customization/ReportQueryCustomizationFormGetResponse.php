<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report\Customization;

/**
 * Response from GET
 */
class ReportQueryCustomizationFormGetResponse
{
    /**
     * Customization form data keyed by report or page CID. Each value has the following structure:
     *
     * @var ReportQueryCustomizationFormGetResponseCustomizationForm|null
     */
    public ?ReportQueryCustomizationFormGetResponseCustomizationForm $a_customization_form = null;

    public function __construct(array $data)
    {
        $this->a_customization_form = isset($data['a_customization_form']) ? new ReportQueryCustomizationFormGetResponseCustomizationForm((array)$data['a_customization_form']) : null;
    }
}
