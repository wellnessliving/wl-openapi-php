<?php

namespace WlSdk\Wl\Login;

/**
 * Response from GET
 */
class LoginGetResponse
{
    /**
     * Whether this user can send postcards.
     *
     * @var bool|null
     */
    public ?bool $can_postcard = null;

    /**
     * Whether this user can send SMS. If `true` - user can send SMS, otherwise - `false`.
     *
     * @var bool|null
     */
    public ?bool $can_send_message = null;

    /**
     * The gender ID. It will be one of the {@link \WlSdk\AGenderSid} constants.
     *
     * @var int|null
     * @see \WlSdk\AGenderSid
     */
    public ?int $id_gender = null;

    /**
     * Whether photo is uploaded.
     * `true` if photo is not uploaded, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_photo_empty = null;

    /**
     * The user's staff key for the specified business.
     *
     * @var string|null
     */
    public ?string $k_staff = null;

    /**
     * The first name of the user.
     *
     * @var string|null
     */
    public ?string $s_first_name = null;

    /**
     * The surname of the user.
     *
     * @var string|null
     */
    public ?string $s_last_name = null;

    /**
     * The client`s mailing address.
     *
     * @var string|null
     */
    public ?string $text_mail_client = null;

    /**
     * The staff member's mailing address.
     * This will be set if the user is a staff member ([LoginApi](/Wl/Login/Login.json)).
     *
     * @var string|null
     */
    public ?string $text_mail_staff = null;

    /**
     * The staff member's first name.
     * This will be set if the user is a staff member ([LoginApi](/Wl/Login/Login.json)).
     *
     * @var string|null
     */
    public ?string $text_name_first_staff = null;

    /**
     * The user's login name. This is returned in cases when neither the first name nor the last name have been
     * specified.
     * An empty string is returned in cases where neither the first name, last name, nor login have been specified.
     *
     * @var string|null
     */
    public ?string $text_name_full_client = null;

    /**
     * The staff member's full name.
     * The user login is returned in cases where neither the first name nor the last name have been specified.
     * An empty string is returned in cases where neither the first name, last name, nor login have been specified.
     * This will be set if the user is a staff member ([LoginApi](/Wl/Login/Login.json)).
     *
     * @var string|null
     */
    public ?string $text_name_full_staff = null;

    /**
     * The staff member's last name.
     * This will be set if the user is a staff member ([LoginApi](/Wl/Login/Login.json)).
     *
     * @var string|null
     */
    public ?string $text_name_last_staff = null;

    /**
     * The key of the user.
     *
     * `null` on case when is walk-in client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * The user's UID as a staff member for the specified business.
     *
     * @var string|null
     */
    public ?string $uid_staff = null;

    /**
     * The URL where the user photo can be retrieved.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->can_postcard = isset($data['can_postcard']) ? (bool)$data['can_postcard'] : null;
        $this->can_send_message = isset($data['can_send_message']) ? (bool)$data['can_send_message'] : null;
        $this->id_gender = isset($data['id_gender']) ? (int)$data['id_gender'] : null;
        $this->is_photo_empty = isset($data['is_photo_empty']) ? (bool)$data['is_photo_empty'] : null;
        $this->k_staff = isset($data['k_staff']) ? (string)$data['k_staff'] : null;
        $this->s_first_name = isset($data['s_first_name']) ? (string)$data['s_first_name'] : null;
        $this->s_last_name = isset($data['s_last_name']) ? (string)$data['s_last_name'] : null;
        $this->text_mail_client = isset($data['text_mail_client']) ? (string)$data['text_mail_client'] : null;
        $this->text_mail_staff = isset($data['text_mail_staff']) ? (string)$data['text_mail_staff'] : null;
        $this->text_name_first_staff = isset($data['text_name_first_staff']) ? (string)$data['text_name_first_staff'] : null;
        $this->text_name_full_client = isset($data['text_name_full_client']) ? (string)$data['text_name_full_client'] : null;
        $this->text_name_full_staff = isset($data['text_name_full_staff']) ? (string)$data['text_name_full_staff'] : null;
        $this->text_name_last_staff = isset($data['text_name_last_staff']) ? (string)$data['text_name_last_staff'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
        $this->uid_staff = isset($data['uid_staff']) ? (string)$data['uid_staff'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
