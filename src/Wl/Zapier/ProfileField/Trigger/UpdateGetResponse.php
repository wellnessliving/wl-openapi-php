<?php

namespace WlSdk\Wl\Zapier\ProfileField\Trigger;

/**
 * Response from GET
 */
class UpdateGetResponse
{
    /**
     * List of custom fields information where key is `k_field` - RsFieldSql and value is a string as:
     *  `s_value` - for custom text field,
     *  `s_title` - for radio and select custom fields,
     *  `Checked` or `Unchecked` - for checkbox custom field.
     *
     * @var array|null
     */
    public ?array $a_custom_field = null;

    /**
     * Home address of the client.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * Date of birth of the client.
     *
     * @var string|null
     */
    public ?string $text_birth = null;

    /**
     * Mobile phone number.
     *
     * @var string|null
     */
    public ?string $text_cell_phone = null;

    /**
     * Client type.
     *
     * @var string|null
     */
    public ?string $text_client_type = null;

    /**
     * Gender name of the client.
     *
     * @var string|null
     */
    public ?string $text_gender = null;

    /**
     * Home phone number.
     *
     * @var string|null
     */
    public ?string $text_home_phone = null;

    /**
     * Name of the lead for this user.
     *
     * @var string|null
     */
    public ?string $text_lead = null;

    /**
     * Client home location name.
     *
     * @var string|null
     */
    public ?string $text_location = null;

    /**
     * Email of the client.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * First name of the client.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * Last name of the client.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * Name of a referrer of this user.
     *
     * @var string|null
     */
    public ?string $text_referrer = null;

    /**
     * Client timezone name.
     *
     * @var string|null
     */
    public ?string $text_timezone = null;

    /**
     * Value for the field.
     *
     * `null` in case when value is not passed.
     *
     * @var string|null
     */
    public ?string $text_value = null;

    /**
     * Work phone number.
     *
     * @var string|null
     */
    public ?string $text_work_phone = null;

    /**
     * UID of the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_custom_field = isset($data['a_custom_field']) ? (array)$data['a_custom_field'] : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_birth = isset($data['text_birth']) ? (string)$data['text_birth'] : null;
        $this->text_cell_phone = isset($data['text_cell_phone']) ? (string)$data['text_cell_phone'] : null;
        $this->text_client_type = isset($data['text_client_type']) ? (string)$data['text_client_type'] : null;
        $this->text_gender = isset($data['text_gender']) ? (string)$data['text_gender'] : null;
        $this->text_home_phone = isset($data['text_home_phone']) ? (string)$data['text_home_phone'] : null;
        $this->text_lead = isset($data['text_lead']) ? (string)$data['text_lead'] : null;
        $this->text_location = isset($data['text_location']) ? (string)$data['text_location'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_name_last = isset($data['text_name_last']) ? (string)$data['text_name_last'] : null;
        $this->text_referrer = isset($data['text_referrer']) ? (string)$data['text_referrer'] : null;
        $this->text_timezone = isset($data['text_timezone']) ? (string)$data['text_timezone'] : null;
        $this->text_value = isset($data['text_value']) ? (string)$data['text_value'] : null;
        $this->text_work_phone = isset($data['text_work_phone']) ? (string)$data['text_work_phone'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
