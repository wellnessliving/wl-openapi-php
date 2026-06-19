<?php
namespace WlSdk\Wl\User\Info;

/**
 * Response from GET
 */
class UserInfoApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_custom_field = null;

    /**
     * List of member groups that the user belongs to.
     *
     * @var string[]|null
     */
    public ?array $a_member_group = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_photo = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_result_list = null;

    /**
     * Whether the user can purchase introductory offers.
     * 
     * `true` if user can purchase introductory offers, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_introductory = null;

    /**
     * The date the user was added, given in UTC time.
     *
     * @var string|null
     */
    public ?string $dt_add = null;

    /**
     * The user's birthday. This will be `null` if the birthday isn't set yet.
     *
     * @var string|null
     */
    public ?string $dt_birth = null;

    /**
     * Whether client's login type has a discount.
     * `true` - login type has a discount, `false` - otherwise.
     * 
     * This will be `null` if a client has no assigned login type.
     *
     * @var bool|null
     */
    public ?bool $has_discount = null;

    /**
     * The ID of the user's gender. One of the [AGenderSid](#/components/schemas/AGenderSid) constants.
     * 
     * This will be `null` if the gender isn't set yet.
     *
     * @var int|null
     */
    public ?int $id_gender = null;

    /**
     * This will be `true` if the user has Google Calendar linked to their account; otherwise, `false`.
     *
     * @var bool|null
     */
    public ?bool $is_calendar_google = null;

    /**
     * This will be `true` if the user has Microsoft Calendar linked to their account; otherwise, `false`.
     *
     * @var bool|null
     */
    public ?bool $is_calendar_microsoft = null;

    /**
     * This will be `true` if the user has never made purchases or reservations in this business.
     * Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_customer_new = null;

    /**
     * This will be `true` if the user is a traveler. A traveler is someone whose home location isn't the current
     * location
     * in the Enterprise business.
     *
     * @var bool|null
     */
    public ?bool $is_traveller = null;

    /**
     * City key.
     * 
     * `null` if "address" field is disabled in the business.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    /**
     * The key of the login type. The login type describes the user's client type in this business.
     *
     * @var string|null
     */
    public ?string $k_login_type = null;

    /**
     * The user's first name.
     *
     * @var string|null
     */
    public ?string $s_first_name = null;

    /**
     * The user's last name.
     *
     * @var string|null
     */
    public ?string $s_last_name = null;

    /**
     * The user's email address.
     *
     * @var string|null
     */
    public ?string $s_mail = null;

    /**
     * The user's member ID in the business. Also referred to as the client ID in the client's profile. This value
     * is set by the business and separate from the `uid` value.
     *
     * @var string|null
     */
    public ?string $s_member = null;

    /**
     * The user's phone number.
     *
     * @var string|null
     */
    public ?string $s_phone = null;

    /**
     * The user's home phone number.
     *
     * @var string|null
     */
    public ?string $s_phone_home = null;

    /**
     * The user's work phone number.
     *
     * @var string|null
     */
    public ?string $s_phone_work = null;

    /**
     * Address inside a city.
     * 
     * `null` if "address" field is disabled in the business.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * City name.
     * 
     * `null` if "address" field is disabled in the business.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * Login type title.
     * Empty if a client has no client type assigned.
     *
     * @var string|null
     */
    public ?string $text_login_type = null;

    /**
     * Postal code.
     * 
     * `null` if "address" field is disabled in the business.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * The key of the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The URL for the user's photo.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->a_custom_field = isset($data['a_custom_field']) ? (array)$data['a_custom_field'] : null;
        $this->a_member_group = isset($data['a_member_group']) ? (array)$data['a_member_group'] : null;
        $this->a_photo = isset($data['a_photo']) ? (array)$data['a_photo'] : null;
        $this->a_result_list = isset($data['a_result_list']) ? (array)$data['a_result_list'] : null;
        $this->can_introductory = isset($data['can_introductory']) ? (bool)$data['can_introductory'] : null;
        $this->dt_add = isset($data['dt_add']) ? (string)$data['dt_add'] : null;
        $this->dt_birth = isset($data['dt_birth']) ? (string)$data['dt_birth'] : null;
        $this->has_discount = isset($data['has_discount']) ? (bool)$data['has_discount'] : null;
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->is_calendar_google = isset($data['is_calendar_google']) ? (bool)$data['is_calendar_google'] : null;
        $this->is_calendar_microsoft = isset($data['is_calendar_microsoft']) ? (bool)$data['is_calendar_microsoft'] : null;
        $this->is_customer_new = isset($data['is_customer_new']) ? (bool)$data['is_customer_new'] : null;
        $this->is_traveller = isset($data['is_traveller']) ? (bool)$data['is_traveller'] : null;
        $this->k_city = isset($data['k_city']) ? (string)$data['k_city'] : null;
        $this->k_login_type = isset($data['k_login_type']) ? (string)$data['k_login_type'] : null;
        $this->s_first_name = isset($data['s_first_name']) ? (string)$data['s_first_name'] : null;
        $this->s_last_name = isset($data['s_last_name']) ? (string)$data['s_last_name'] : null;
        $this->s_mail = isset($data['s_mail']) ? (string)$data['s_mail'] : null;
        $this->s_member = isset($data['s_member']) ? (string)$data['s_member'] : null;
        $this->s_phone = isset($data['s_phone']) ? (string)$data['s_phone'] : null;
        $this->s_phone_home = isset($data['s_phone_home']) ? (string)$data['s_phone_home'] : null;
        $this->s_phone_work = isset($data['s_phone_work']) ? (string)$data['s_phone_work'] : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_city = isset($data['text_city']) ? (string)$data['text_city'] : null;
        $this->text_login_type = isset($data['text_login_type']) ? (string)$data['text_login_type'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
