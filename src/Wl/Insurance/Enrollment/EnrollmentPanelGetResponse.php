<?php

namespace WlSdk\Wl\Insurance\Enrollment;

/**
 * Response from GET
 */
class EnrollmentPanelGetResponse
{
    /**
     * "Wellness Program" info.
     *
     * @var EnrollmentPanelGetResponseInfo|null
     */
    public ?EnrollmentPanelGetResponseInfo $a_info = null;

    /**
     * List of fields that must be filled for enrollment. Presented by rendered template.
     *
     * @var string|null
     */
    public ?string $html_field_list = null;

    public function __construct(array $data)
    {
        $this->a_info = isset($data['a_info']) ? new EnrollmentPanelGetResponseInfo((array)$data['a_info']) : null;
        $this->html_field_list = isset($data['html_field_list']) ? (string)$data['html_field_list'] : null;
    }
}
