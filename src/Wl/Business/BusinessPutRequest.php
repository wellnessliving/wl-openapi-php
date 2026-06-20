<?php
namespace WlSdk\Wl\Business;

class BusinessPutRequest
{
    /**
     * Empty array means to not create a staff member.
     * Otherwise, information about staff member to be created in the business.
     *
     * @var array|null
     */
    public ?array $a_staff_member = null;

    /**
     * `true` to send {@link \WlSdk\RsMailSid} mail when creating a staff member.
     * Otherwise send {@link \WlSdk\RsMailSid} mail.
     *
     * @var bool|null
     */
    public ?bool $is_mail_send = null;

    /**
     * The key of the business.
     * 
     * When using `post()` returned key of the created business.
     * When using `put()` used for update business.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the location for update or after creating.
     * `null` if location is not created.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Microsoft Clarity session ID associated with the business claim session.
     *
     * @var string|null
     */
    public ?string $s_clarity_session_id = null;

    /**
     * The email address of the location.
     * Optional.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * The phone number of the business, staff and location.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_staff_member' => $this->a_staff_member,
            'is_mail_send' => $this->is_mail_send,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            's_clarity_session_id' => $this->s_clarity_session_id,
            'text_mail' => $this->text_mail,
            'text_phone' => $this->text_phone,
            ],
            static fn($v) => $v !== null
        );
    }
}
