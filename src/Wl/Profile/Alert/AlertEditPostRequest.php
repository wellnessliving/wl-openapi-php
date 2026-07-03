<?php

namespace WlSdk\Wl\Profile\Alert;

class AlertEditPostRequest
{
    /**
     * Key of current business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login note key to edit or get info for.
     * Empty if new entry is being added.
     *
     * @var string|null
     */
    public ?string $k_login_note = null;

    /**
     * Key of a user to show information or post a note for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The list of location keys to flag client in.
     *
     * @var string[]|null
     */
    public ?array $a_location = null;

    /**
     * Login note access type ID.
     *
     * @var int|null
     * @see \WlSdk\RsLoginNoteAccessSid
     */
    public ?int $id_login_note_access = null;

    /**
     * Whether flagged user can book. Does not matter if [AlertEditApi::$is_flag](/Wl/Profile/Alert/AlertEdit.json)
     * is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * Whether to flag the user.
     *
     * @var bool|null
     */
    public ?bool $is_flag = null;

    /**
     * Whether flagged user can make purchases. Does not matter if
     * [AlertEditApi::$is_flag](/Wl/Profile/Alert/AlertEdit.json) is `false`.
     *
     * @var bool|null
     */
    public ?bool $is_purchase = null;

    /**
     * Note text.
     *
     * @var string|null
     */
    public ?string $text_note = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_note' => $this->k_login_note,
            'uid' => $this->uid,
            'a_location' => $this->a_location,
            'id_login_note_access' => $this->id_login_note_access,
            'is_book' => $this->is_book,
            'is_flag' => $this->is_flag,
            'is_purchase' => $this->is_purchase,
            'text_note' => $this->text_note,
            ],
            static fn ($v) => $v !== null
        );
    }
}
