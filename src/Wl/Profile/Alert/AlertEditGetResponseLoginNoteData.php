<?php
namespace WlSdk\Wl\Profile\Alert;

class AlertEditGetResponseLoginNoteData
{
    /**
     * List of locations the note applies to. Each element:
     *
     * @var AlertEditGetResponseLoginNoteDataLocation|null
     */
    public ?AlertEditGetResponseLoginNoteDataLocation $a_location = null;

    /**
     * `true` if the current user can flag the client; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_flag = null;

    /**
     * Login note access type. One of [RsLoginNoteAccessSid](#/components/schemas/RsLoginNoteAccessSid) constants.
     *
     * @var int|null
     */
    public ?int $id_login_note_access = null;

    /**
     * Login note flag type. One of [RsLoginNoteFlagSid](#/components/schemas/RsLoginNoteFlagSid) constants.
     *
     * @var int|null
     */
    public ?int $id_login_note_flag = null;

    /**
     * Flag source identifier.
     * One of [FlagSourceEnum](#/components/schemas/Wl.Location.Flag.FlagSourceEnum) constant.
     * `null` if the flag was created manually.
     *
     * @var int|null
     */
    public ?int $id_source = null;

    /**
     * `true` if the note was created by an automated process; `false` if created manually.
     *
     * @var bool|null
     */
    public ?bool $is_automated = null;

    /**
     * `true` if the flagged client is allowed to book; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_book = null;

    /**
     * `true` if the client is currently flagged; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_flag = null;

    /**
     * `true` if a flag icon should be displayed; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_icon = null;

    /**
     * `true` if the business has multiple locations; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_location_multiple = null;

    /**
     * `true` if the flagged client is allowed to make purchases; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_purchase = null;

    /**
     * `true` if the note is marked for removal; `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_remove = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login note key.
     *
     * @var string|null
     */
    public ?string $k_login_note = null;

    /**
     * Note text content.
     *
     * @var string|null
     */
    public ?string $s_text = null;

    /**
     * Description of the flag source for display.
     *
     * @var string|null
     */
    public ?string $text_flag_description = null;

    /**
     * Text explaining how to disable the automated flag. Empty string if the flag is manual.
     *
     * @var string|null
     */
    public ?string $text_flag_disable = null;

    /**
     * User key of the flagged client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * URL to submit the login note edit form.
     *
     * @var string|null
     */
    public ?string $url_action = null;

    public function __construct(array $data)
    {
        $this->a_location = isset($data['a_location']) ? new AlertEditGetResponseLoginNoteDataLocation((array)$data['a_location']) : null;
        $this->can_flag = isset($data['can_flag']) ? (bool)$data['can_flag'] : null;
        $this->id_login_note_access = isset($data['id_login_note_access']) ? (int)$data['id_login_note_access'] : null;
        $this->id_login_note_flag = isset($data['id_login_note_flag']) ? (int)$data['id_login_note_flag'] : null;
        $this->id_source = isset($data['id_source']) ? (int)$data['id_source'] : null;
        $this->is_automated = isset($data['is_automated']) ? (bool)$data['is_automated'] : null;
        $this->is_book = isset($data['is_book']) ? (bool)$data['is_book'] : null;
        $this->is_flag = isset($data['is_flag']) ? (bool)$data['is_flag'] : null;
        $this->is_icon = isset($data['is_icon']) ? (bool)$data['is_icon'] : null;
        $this->is_location_multiple = isset($data['is_location_multiple']) ? (bool)$data['is_location_multiple'] : null;
        $this->is_purchase = isset($data['is_purchase']) ? (bool)$data['is_purchase'] : null;
        $this->is_remove = isset($data['is_remove']) ? (bool)$data['is_remove'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->k_login_note = isset($data['k_login_note']) ? (string)$data['k_login_note'] : null;
        $this->s_text = isset($data['s_text']) ? (string)$data['s_text'] : null;
        $this->text_flag_description = isset($data['text_flag_description']) ? (string)$data['text_flag_description'] : null;
        $this->text_flag_disable = isset($data['text_flag_disable']) ? (string)$data['text_flag_disable'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->url_action = isset($data['url_action']) ? (string)$data['url_action'] : null;
    }
}
