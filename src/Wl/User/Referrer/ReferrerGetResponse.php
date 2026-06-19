<?php
namespace WlSdk\Wl\User\Referrer;

/**
 * Response from GET
 */
class ReferrerGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_photo = null;

    /**
     * The email address of the referrer.
     *
     * @var string|null
     */
    public ?string $s_email = null;

    /**
     * The business client ID of the referrer.
     *
     * @var string|null
     */
    public ?string $s_member = null;

    /**
     * The first name of the referrer.
     *
     * @var string|null
     */
    public ?string $s_name_first = null;

    /**
     * The last name of the referrer.
     *
     * @var string|null
     */
    public ?string $s_name_last = null;

    /**
     * The phone number of the referrer.
     *
     * @var string|null
     */
    public ?string $s_phone = null;

    /**
     * Composes name of the referrer for public usage.
     * `null` if the referrer is not found.
     *
     * @var string|null
     */
    public ?string $text_name_public = null;

    /**
     * The referrer's user key.
     *
     * @var string|null
     */
    public ?string $uid_referrer = null;

    public function __construct(array $data)
    {
        $this->a_photo = isset($data['a_photo']) ? (array)$data['a_photo'] : null;
        $this->s_email = isset($data['s_email']) ? (string)$data['s_email'] : null;
        $this->s_member = isset($data['s_member']) ? (string)$data['s_member'] : null;
        $this->s_name_first = isset($data['s_name_first']) ? (string)$data['s_name_first'] : null;
        $this->s_name_last = isset($data['s_name_last']) ? (string)$data['s_name_last'] : null;
        $this->s_phone = isset($data['s_phone']) ? (string)$data['s_phone'] : null;
        $this->text_name_public = isset($data['text_name_public']) ? (string)$data['text_name_public'] : null;
        $this->uid_referrer = isset($data['uid_referrer']) ? (string)$data['uid_referrer'] : null;
    }
}
