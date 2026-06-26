<?php

namespace WlSdk\Wl\Zapier\ClientGroup\Add\Trigger;

class AddPostRequest
{
    /**
     * Business key for which trigger/action is performed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
     * Member group key.
     *
     * @var string|null
     */
    public ?string $k_member_group = null;

    /**
     * Identifier of the webhook in Zapier.
     *
     * @var string|null
     */
    public ?string $s_id = null;

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
     * Work phone number.
     *
     * @var string|null
     */
    public ?string $text_work_phone = null;

    /**
     * UID of the client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Webhook URL.
     *
     * @var string|null
     */
    public ?string $url_webhook = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_custom_field' => $this->a_custom_field,
            'k_member_group' => $this->k_member_group,
            's_id' => $this->s_id,
            'text_address' => $this->text_address,
            'text_birth' => $this->text_birth,
            'text_cell_phone' => $this->text_cell_phone,
            'text_client_type' => $this->text_client_type,
            'text_gender' => $this->text_gender,
            'text_home_phone' => $this->text_home_phone,
            'text_lead' => $this->text_lead,
            'text_location' => $this->text_location,
            'text_mail' => $this->text_mail,
            'text_name_first' => $this->text_name_first,
            'text_name_last' => $this->text_name_last,
            'text_referrer' => $this->text_referrer,
            'text_timezone' => $this->text_timezone,
            'text_work_phone' => $this->text_work_phone,
            'uid' => $this->uid,
            'url_webhook' => $this->url_webhook,
            ],
            static fn ($v) => $v !== null
        );
    }
}
