<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcastN
{
    /**
     * Status of mail verification.
     * One of the [MailVerifyStatusSid](#/components/schemas/Wl.Mail.Verify.MailVerifyStatusSid) constants.
     * Or [MailVerifyStatusOption::DEFAULT_VALUE](#/components/schemas/Wl.Business.Config.Option.OptionSidAbstract)
     * if option "Enable Custom Reply To Emails" in Business -&gt; Feature is disabled.
     *
     * @var int|null
     */
    public ?int $id_mail_verify_status = null;

    /**
     * Email address to check.
     *
     * @var string|null
     */
    public ?string $text_email = null;

    public function __construct(array $data)
    {
        $this->id_mail_verify_status = isset($data['id_mail_verify_status']) ? (int)$data['id_mail_verify_status'] : null;
        $this->text_email = isset($data['text_email']) ? (string)$data['text_email'] : null;
    }
}
