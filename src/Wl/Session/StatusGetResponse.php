<?php

namespace WlSdk\Wl\Session;

/**
 * Response from GET
 */
class StatusGetResponse
{
    /**
     * Whether current user has left hist contact details. `contactSet()` is used to set, and `contactGet()` is
     * used to retrieve this flag.
     *
     * @var bool|null
     */
    public ?bool $has_contact = null;

    /**
     * Business key if user logged in.
     *
     * @var int|null
     */
    public ?int $k_business = null;

    /**
     * User contact email address.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    /**
     * First name of the user.
     *
     * @var string|null
     */
    public ?string $text_first_name = null;

    /**
     * Last name of the user.
     *
     * @var string|null
     */
    public ?string $text_last_name = null;

    /**
     * Cell phone number.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * User's role. May be on of: `guest`, `user`, `location-owner`, `admin`.
     *
     * @var string|null
     */
    public ?string $text_role = null;

    /**
     * Mode of current user session: `frontend` or `backend`. See {@link \WlSdk\RsPlaceSid}.
     *
     * @var string|null
     */
    public ?string $text_state = null;

    /**
     * Current user ID.
     *
     * @var int|null
     */
    public ?int $uid = null;

    /**
     * User photo URL.
     *
     * @var string|null
     */
    public ?string $url_photo = null;

    public function __construct(array $data)
    {
        $this->has_contact = isset($data['has_contact']) ? (bool)$data['has_contact'] : null;
        $this->k_business = isset($data['k_business']) ? (int)$data['k_business'] : null;
        $this->text_email = isset($data['text_email']) ? (string)$data['text_email'] : null;
        $this->text_first_name = isset($data['text_first_name']) ? (string)$data['text_first_name'] : null;
        $this->text_last_name = isset($data['text_last_name']) ? (string)$data['text_last_name'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_role = isset($data['text_role']) ? (string)$data['text_role'] : null;
        $this->text_state = isset($data['text_state']) ? (string)$data['text_state'] : null;
        $this->uid = isset($data['uid']) ? (int)$data['uid'] : null;
        $this->url_photo = isset($data['url_photo']) ? (string)$data['url_photo'] : null;
    }
}
