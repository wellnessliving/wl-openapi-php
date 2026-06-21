<?php

namespace WlSdk\Wl\User\Info;

class UserInfoGetResponseResultList
{
    /**
     * List of the custom user fields. Each value is:
     *
     * @var UserInfoGetResponseResultListCustomField|null
     */
    public ?UserInfoGetResponseResultListCustomField $a_custom_field = null;

    /**
     * List of member groups that the user belongs to.
     *
     * @var string[]|null
     */
    public ?array $a_member_group = null;

    /**
     * Information about the user's photo.
     *
     * @var UserInfoGetResponseResultListPhoto|null
     */
    public ?UserInfoGetResponseResultListPhoto $a_photo = null;

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
     * The ID of the user's gender. One of the {@link \WlSdk\AGenderSid} constants.
     *
     * @var int|null
     * @see \WlSdk\AGenderSid
     */
    public ?int $id_gender = null;

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
     * The key of the business.
     * This may be empty if system-wide information is needed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

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
        $this->a_custom_field = isset($data['a_custom_field']) ? new UserInfoGetResponseResultListCustomField((array)$data['a_custom_field']) : null;
        $this->a_member_group = isset($data['a_member_group']) ? (array)$data['a_member_group'] : null;
        $this->a_photo = isset($data['a_photo']) ? new UserInfoGetResponseResultListPhoto((array)$data['a_photo']) : null;
        $this->dt_add = isset($data['dt_add']) ? (string)$data['dt_add'] : null;
        $this->dt_birth = isset($data['dt_birth']) ? (string)$data['dt_birth'] : null;
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->is_customer_new = isset($data['is_customer_new']) ? (bool)$data['is_customer_new'] : null;
        $this->is_traveller = isset($data['is_traveller']) ? (bool)$data['is_traveller'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_login_type = isset($data['k_login_type']) ? (string)$data['k_login_type'] : null;
        $this->s_first_name = isset($data['s_first_name']) ? (string)$data['s_first_name'] : null;
        $this->s_last_name = isset($data['s_last_name']) ? (string)$data['s_last_name'] : null;
        $this->s_mail = isset($data['s_mail']) ? (string)$data['s_mail'] : null;
        $this->s_member = isset($data['s_member']) ? (string)$data['s_member'] : null;
        $this->s_phone = isset($data['s_phone']) ? (string)$data['s_phone'] : null;
        $this->s_phone_home = isset($data['s_phone_home']) ? (string)$data['s_phone_home'] : null;
        $this->s_phone_work = isset($data['s_phone_work']) ? (string)$data['s_phone_work'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
