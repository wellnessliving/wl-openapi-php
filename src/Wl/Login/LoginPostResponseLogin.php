<?php

namespace WlSdk\Wl\Login;

class LoginPostResponseLogin
{
    /**
     * User's gender. One of {@link \WlSdk\AGenderSid} constants.
     *
     * @var int|null
     * @see \WlSdk\AGenderSid
     */
    public ?int $id_gender = null;

    /**
     * User's key as staff member.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * User first name.
     *
     * @var string|null
     */
    public ?string $s_first_name = null;

    /**
     * First letter of user last name.
     *
     * @var string|null
     */
    public ?string $s_last_name = null;

    /**
     * Client`s mail.
     *
     * @var string|null
     */
    public ?string $text_mail_client = null;

    /**
     * Staff`s mail.
     *
     * @var string|null
     */
    public ?string $text_mail_staff = null;

    /**
     * Staff's first name.
     *
     * @var string|null
     */
    public ?string $text_name_first_staff = null;

    /**
     * Full client name. User login is returned in a case neither first name, nor last name specified.
     * An empty string is returned in a case neither first name, nor last name specified, nor login.
     *
     * @var string|null
     */
    public ?string $text_name_full_client = null;

    /**
     * Full staff name. User login is returned in a case neither first name, nor last name specified. An empty
     * string is returned in a case neither first name, nor last name specified, nor login.
     *
     * @var string|null
     */
    public ?string $text_name_full_staff = null;

    /**
     * Staff`s last name.
     *
     * @var string|null
     */
    public ?string $text_name_last_staff = null;

    /**
     * The user's UID as a staff member.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * User photo URL.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->s_first_name = isset($data['s_first_name']) ? (string)$data['s_first_name'] : null;
        $this->s_last_name = isset($data['s_last_name']) ? (string)$data['s_last_name'] : null;
        $this->text_mail_client = isset($data['text_mail_client']) ? (string)$data['text_mail_client'] : null;
        $this->text_mail_staff = isset($data['text_mail_staff']) ? (string)$data['text_mail_staff'] : null;
        $this->text_name_first_staff = isset($data['text_name_first_staff']) ? (string)$data['text_name_first_staff'] : null;
        $this->text_name_full_client = isset($data['text_name_full_client']) ? (string)$data['text_name_full_client'] : null;
        $this->text_name_full_staff = isset($data['text_name_full_staff']) ? (string)$data['text_name_full_staff'] : null;
        $this->text_name_last_staff = isset($data['text_name_last_staff']) ? (string)$data['text_name_last_staff'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
