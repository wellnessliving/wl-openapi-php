<?php

namespace WlSdk\Wl\Insurance\Enrollment\Field;

class EnrollmentFieldListGetResponseFieldListAccount
{
    /**
     * Additional configuration for the field.
     * For the account type field, keys are account type titles and values are {@link \WlSdk\RsPayBankAchTypeSid}
     * constants.
     * Empty array for other fields.
     *
     * @var string[]|null
     */
    public ?array $a_config = null;

    /**
     * Maximum length of the field value. `null` if no limit.
     *
     * @var int|null
     */
    public ?int $i_length = null;

    /**
     * `true` if the field is disabled and should not be shown.
     *
     * @var bool|null
     */
    public ?bool $is_disable = null;

    /**
     * `true` if the field is required.
     *
     * @var bool|null
     */
    public ?bool $is_required = null;

    /**
     * The field identifier key.
     *
     * @var string|null
     */
    public ?string $k_field = null;

    /**
     * Regular expression for client-side validation. Empty string if no validation pattern.
     *
     * @var string|null
     */
    public ?string $s_regular = null;

    /**
     * The label text for the field displayed to the user.
     *
     * @var string|null
     */
    public ?string $text_display_name = null;

    /**
     * The error message to display if the field value is invalid.
     *
     * @var string|null
     */
    public ?string $text_error_message = null;

    /**
     * The internal name of the field.
     *
     * @var string|null
     */
    public ?string $text_field_name = null;

    public function __construct(array $data)
    {
        $this->a_config = isset($data['a_config']) ? (array)$data['a_config'] : null;
        $this->i_length = isset($data['i_length']) ? (int)$data['i_length'] : null;
        $this->is_disable = isset($data['is_disable']) ? (bool)$data['is_disable'] : null;
        $this->is_required = isset($data['is_required']) ? (bool)$data['is_required'] : null;
        $this->k_field = isset($data['k_field']) ? (string)$data['k_field'] : null;
        $this->s_regular = isset($data['s_regular']) ? (string)$data['s_regular'] : null;
        $this->text_display_name = isset($data['text_display_name']) ? (string)$data['text_display_name'] : null;
        $this->text_error_message = isset($data['text_error_message']) ? (string)$data['text_error_message'] : null;
        $this->text_field_name = isset($data['text_field_name']) ? (string)$data['text_field_name'] : null;
    }
}
