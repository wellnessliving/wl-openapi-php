<?php

namespace WlSdk\Wl\User\Info;

class UserListInfoGetResponseUserData
{
    /**
     * Keys are UIDs or relatives, values - relation type from {@link \WlSdk\RsFamilyRelationSid}.
     *
     * @var array|null
     */
    public ?array $a_relation = null;

    /**
     * Gender type, One of {@link \WlSdk\Wl\Gender\GenderSid} constants. Empty means that client is not selected
     * gender type.
     *
     * @var int|null
     * @see \WlSdk\Wl\Gender\GenderSid
     */
    public ?int $id_gender = null;

    /**
     * Whether an address of a user is inherited from a relative `true` - inherited, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_address_inherited = null;

    /**
     * Whether an email of a user is inherited from a relative. `true` - inherited, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_inherited = null;

    /**
     * Whether phones of a user are inherited from a relative `true` - inherited, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_phone_inherited = null;

    /**
     * City key. Primary key in the AGeoSql table.
     *
     * @var string|null
     */
    public ?string $k_city = null;

    /**
     * User's address.
     *
     * @var string|null
     */
    public ?string $text_address = null;

    /**
     * User's birth date.
     *
     * @var string|null
     */
    public ?string $text_birth = null;

    /**
     * User's phone.
     *
     * @var string|null
     */
    public ?string $text_cell_phone = null;

    /**
     * User's city.
     *
     * @var string|null
     */
    public ?string $text_city = null;

    /**
     * Compound key delimited wit a colon. First part is business key. Primary key in RsBusinessSql table. Second
     * part - uid of a user.
     * Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $text_business_uid_key = null;

    /**
     * User's home phone.
     *
     * @var string|null
     */
    public ?string $text_home_phone = null;

    /**
     * User's email.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * User's member ID.
     *
     * @var string|null
     */
    public ?string $text_member = null;

    /**
     * User's first name.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * User's full name.
     *
     * @var string|null
     */
    public ?string $text_name_full = null;

    /**
     * User's last name.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * User's postal.
     *
     * @var string|null
     */
    public ?string $text_postal = null;

    /**
     * User's work phone.
     *
     * @var string|null
     */
    public ?string $text_work_phone = null;

    /**
     * User's photo url.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->a_relation = isset($data['a_relation']) ? (array)$data['a_relation'] : null;
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->is_address_inherited = isset($data['is_address_inherited']) ? (bool)$data['is_address_inherited'] : null;
        $this->is_inherited = isset($data['is_inherited']) ? (bool)$data['is_inherited'] : null;
        $this->is_phone_inherited = isset($data['is_phone_inherited']) ? (bool)$data['is_phone_inherited'] : null;
        $this->k_city = isset($data['k_city']) ? (string)$data['k_city'] : null;
        $this->text_address = isset($data['text_address']) ? (string)$data['text_address'] : null;
        $this->text_birth = isset($data['text_birth']) ? (string)$data['text_birth'] : null;
        $this->text_cell_phone = isset($data['text_cell_phone']) ? (string)$data['text_cell_phone'] : null;
        $this->text_city = isset($data['text_city']) ? (string)$data['text_city'] : null;
        $this->text_business_uid_key = isset($data['text_business_uid_key']) ? (string)$data['text_business_uid_key'] : null;
        $this->text_home_phone = isset($data['text_home_phone']) ? (string)$data['text_home_phone'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_member = isset($data['text_member']) ? (string)$data['text_member'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_name_full = isset($data['text_name_full']) ? (string)$data['text_name_full'] : null;
        $this->text_name_last = isset($data['text_name_last']) ? (string)$data['text_name_last'] : null;
        $this->text_postal = isset($data['text_postal']) ? (string)$data['text_postal'] : null;
        $this->text_work_phone = isset($data['text_work_phone']) ? (string)$data['text_work_phone'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
