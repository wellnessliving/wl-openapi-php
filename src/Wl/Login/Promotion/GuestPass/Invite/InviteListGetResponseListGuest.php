<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

class InviteListGetResponseListGuest
{
    /**
     * Guest email address.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Guest first name.
     *
     * @var string|null
     */
    public ?string $text_name_first = null;

    /**
     * Guest last name.
     *
     * @var string|null
     */
    public ?string $text_name_last = null;

    /**
     * Guest phone number, or `null` if not available.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * Guest user key.
     * `null` if the guest did not have an account when the invitation was sent.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_name_first = isset($data['text_name_first']) ? (string)$data['text_name_first'] : null;
        $this->text_name_last = isset($data['text_name_last']) ? (string)$data['text_name_last'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
