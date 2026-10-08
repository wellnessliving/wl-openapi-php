<?php

namespace WlSdk\Wl\Classes\Editor;

class ClassEditorGetResponseClassAccess
{
    /**
     * Keys of the client types that may book the class.
     *
     * Only taken into account while `id_bookable` is {@link \WlSdk\Wl\Service\BookableSid}. Empty for
     * a class every client type may book.
     *
     * @var string[]|null
     */
    public ?array $a_login_type = null;

    /**
     * Keys of the client types staff may book into the class.
     *
     * Only taken into account while `is_bookable_staff` is `false`. Empty for a class staff
     * may book every client type into.
     *
     * @var string[]|null
     */
    public ?array $a_login_type_staff = null;

    /**
     * Keys of the client groups that may book the class.
     *
     * Only taken into account while `id_bookable` is {@link \WlSdk\Wl\Service\BookableSid}. Empty for
     * a class every client group may book.
     *
     * @var string[]|null
     */
    public ?array $a_member_group = null;

    /**
     * Months above the whole years of the minimum age of a client of the class.
     *
     * `null` if the class has no minimum age.
     *
     * @var int|null
     */
    public ?int $i_age_from_month = null;

    /**
     * Whole years of the minimum age of a client of the class.
     *
     * `null` if the class has no minimum age.
     *
     * @var int|null
     */
    public ?int $i_age_from_year = null;

    /**
     * Months above the whole years of the maximum age of a client of the class.
     *
     * `null` if the class has no maximum age.
     *
     * @var int|null
     */
    public ?int $i_age_to_month = null;

    /**
     * Whole years of the maximum age of a client of the class.
     *
     * `null` if the class has no maximum age.
     *
     * @var int|null
     */
    public ?int $i_age_to_year = null;

    /**
     * Kind of the age restriction of the class.
     *
     * Only taken into account while `is_age_restrict` is `true`.
     *
     * @var int|null
     * @see \WlSdk\Wl\Service\AgeRestrictionStatusSid
     */
    public ?int $id_age_restrict = null;

    /**
     * Who may book the class online.
     *
     * @var int|null
     * @see \WlSdk\Wl\Service\BookableSid
     */
    public ?int $id_bookable = null;

    /**
     * `true` if the class is shown to a client who does not meet its age requirement, `false` if it is hidden from
     * them.
     *
     * @var bool|null
     */
    public ?bool $is_age_public = null;

    /**
     * `true` if the class has an age restriction, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_age_restrict = null;

    /**
     * `true` if staff agreed to make the birthdate a required field of the client profile, `false` otherwise.
     *
     * Only the client sets it. It is needed while an age restriction is switched on for a business whose clients
     * are
     * not required to give the birthdate yet.
     *
     * @var bool|null
     */
    public ?bool $is_birthday_update_require = null;

    /**
     * `true` if staff may book any client type into the class, `false` if only the client types of
     * `a_login_type_staff`.
     *
     * @var bool|null
     */
    public ?bool $is_bookable_staff = null;

    /**
     * `true` if the class is hidden from a client who may not book it, `false` if it is shown to them.
     *
     * @var bool|null
     */
    public ?bool $is_online_private = null;

    public function __construct(array $data)
    {
        $this->a_login_type = isset($data['a_login_type']) ? (array)$data['a_login_type'] : null;
        $this->a_login_type_staff = isset($data['a_login_type_staff']) ? (array)$data['a_login_type_staff'] : null;
        $this->a_member_group = isset($data['a_member_group']) ? (array)$data['a_member_group'] : null;
        $this->i_age_from_month = isset($data['i_age_from_month']) ? (int)$data['i_age_from_month'] : null;
        $this->i_age_from_year = isset($data['i_age_from_year']) ? (int)$data['i_age_from_year'] : null;
        $this->i_age_to_month = isset($data['i_age_to_month']) ? (int)$data['i_age_to_month'] : null;
        $this->i_age_to_year = isset($data['i_age_to_year']) ? (int)$data['i_age_to_year'] : null;
        $this->id_age_restrict = isset($data['id_age_restrict']) ? (int)$data['id_age_restrict'] : null;
        $this->id_bookable = isset($data['id_bookable']) ? (int)$data['id_bookable'] : null;
        $this->is_age_public = isset($data['is_age_public']) ? (bool)$data['is_age_public'] : null;
        $this->is_age_restrict = isset($data['is_age_restrict']) ? (bool)$data['is_age_restrict'] : null;
        $this->is_birthday_update_require = isset($data['is_birthday_update_require']) ? (bool)$data['is_birthday_update_require'] : null;
        $this->is_bookable_staff = isset($data['is_bookable_staff']) ? (bool)$data['is_bookable_staff'] : null;
        $this->is_online_private = isset($data['is_online_private']) ? (bool)$data['is_online_private'] : null;
    }
}
