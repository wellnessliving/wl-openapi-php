<?php

namespace WlSdk\Wl\Notification\Send;

/**
 * Response from GET
 */
class MessageSendGetResponse
{
    /**
     * List of users who can receive message. Each value is a primary key from PassportLoginSql table.
     *
     * @var string[]|null
     */
    public ?array $a_uid_checked = null;

    /**
     * List of template variables. Each element is array:
     *
     * @var MessageSendGetResponseVariable|null
     */
    public ?MessageSendGetResponseVariable $a_variable = null;

    /**
     * HTML version of the email pattern.
     *
     * @var string|null
     */
    public ?string $html_mail = null;

    /**
     * Type if copy to business. One of {@link \WlSdk\RsMailCopySid} constants. `0` if not set.
     *
     * @var int|null
     * @see \WlSdk\RsMailCopySid
     */
    public ?int $id_mail_copy_business = null;

    /**
     * `true` if email configured for notification, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * `true` if push configured for notification, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * `true` if SMS configured for notification, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /**
     * Key of the mail pattern. Primary key in RsMailPatternSql table.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern = null;

    /**
     * Business copy e-mail.
     *
     * @var string|null
     */
    public ?string $text_business_mail = null;

    /**
     * Business reply to name.
     *
     * @var string|null
     */
    public ?string $text_business_name = null;

    /**
     * Business reply to email.
     *
     * @var string|null
     */
    public ?string $text_business_reply = null;

    /**
     * Text version of the email pattern.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Pattern for the push notification.
     *
     * @var string|null
     */
    public ?string $text_push = null;

    /**
     * Pattern for the SMS notification.
     *
     * @var string|null
     */
    public ?string $text_sms = null;

    /**
     * Mail subject.
     *
     * @var string|null
     */
    public ?string $text_subject = null;

    public function __construct(array $data)
    {
        $this->a_uid_checked = isset($data['a_uid_checked']) ? (array)$data['a_uid_checked'] : null;
        $this->a_variable = isset($data['a_variable']) ? new MessageSendGetResponseVariable((array)$data['a_variable']) : null;
        $this->html_mail = isset($data['html_mail']) ? (string)$data['html_mail'] : null;
        $this->id_mail_copy_business = isset($data['id_mail_copy_business']) ? (int)$data['id_mail_copy_business'] : null;
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->is_push = isset($data['is_push']) ? (bool)$data['is_push'] : null;
        $this->is_sms = isset($data['is_sms']) ? (bool)$data['is_sms'] : null;
        $this->k_mail_pattern = isset($data['k_mail_pattern']) ? (string)$data['k_mail_pattern'] : null;
        $this->text_business_mail = isset($data['text_business_mail']) ? (string)$data['text_business_mail'] : null;
        $this->text_business_name = isset($data['text_business_name']) ? (string)$data['text_business_name'] : null;
        $this->text_business_reply = isset($data['text_business_reply']) ? (string)$data['text_business_reply'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_push = isset($data['text_push']) ? (string)$data['text_push'] : null;
        $this->text_sms = isset($data['text_sms']) ? (string)$data['text_sms'] : null;
        $this->text_subject = isset($data['text_subject']) ? (string)$data['text_subject'] : null;
    }
}
