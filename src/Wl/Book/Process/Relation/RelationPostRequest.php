<?php
namespace WlSdk\Wl\Book\Process\Relation;

class RelationPostRequest
{
    /**
     * The business where `uid_from` creates the new relative.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The user who's adding the new relative.
     *
     * @var string|null
     */
    public ?string $uid_from = null;

    /**
     * Day of birthday.
     * `null` if birthday is not entered.
     *
     * @var int|null
     */
    public ?int $i_day = null;

    /**
     * Month of birthday.
     * `null` if birthday is not entered.
     *
     * @var int|null
     */
    public ?int $i_month = null;

    /**
     * Year of birthday.
     * `null` if birthday is not entered.
     *
     * @var int|null
     */
    public ?int $i_year = null;

    /**
     * The mode type.
     * One of the [ModeSid](#/components/schemas/Wl.Mode.ModeSid) constants.
     *
     * @var int|null
     */
    public ?int $id_mode = null;

    /**
     * The relation type.
     * One of the [RsFamilyRelationSid](#/components/schemas/RsFamilyRelationSid) constants.
     *
     * @var int|null
     */
    public ?int $id_relation = null;

    /**
     * `true` - the new relative uses the email from `uid_from`.
     * 
     * `false` - the new relative has their own email.
     *
     * @var bool|null
     */
    public ?bool $is_mail_inherit = null;

    /**
     * `true` - the new relative pays for themselves.
     * 
     * `false` - `uid_from` pays for the new relative.
     *
     * @var bool|null
     */
    public ?bool $is_pay_self = null;

    /**
     * The new relative's email.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The new relative's first name.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * The new relative's last name.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * UID of already existed in another business user.
     *
     * @var string|null
     */
    public ?string $uid_existed = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_from' => $this->uid_from,
            'i_day' => $this->i_day,
            'i_month' => $this->i_month,
            'i_year' => $this->i_year,
            'id_mode' => $this->id_mode,
            'id_relation' => $this->id_relation,
            'is_mail_inherit' => $this->is_mail_inherit,
            'is_pay_self' => $this->is_pay_self,
            'text_mail' => $this->text_mail,
            'text_name_first' => $this->text_name_first,
            'text_name_last' => $this->text_name_last,
            'uid_existed' => $this->uid_existed,
            ],
            static fn($v) => $v !== null
        );
    }
}
