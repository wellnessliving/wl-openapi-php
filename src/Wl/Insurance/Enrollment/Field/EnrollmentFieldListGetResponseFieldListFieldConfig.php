<?php
namespace WlSdk\Wl\Insurance\Enrollment\Field;

class EnrollmentFieldListGetResponseFieldListFieldConfig
{
    /**
     * Options for dropdown fields. Keys are display titles, values are option values.
     * Empty array if the field is not a dropdown.
     *
     * @var string[]|null
     */
    public ?array $a_option = null;

    /**
     * The type of text input. Present only for text-type fields.
     *
     * @var string|null
     */
    public ?string $text_type = null;

    public function __construct(array $data)
    {
        $this->a_option = isset($data['a_option']) ? (array)$data['a_option'] : null;
        $this->text_type = isset($data['text_type']) ? (string)$data['text_type'] : null;
    }
}
