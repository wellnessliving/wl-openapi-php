<?php
namespace WlSdk\Core\WebSocket;

class SubscribePostResponseMessageBroadcast28Info
{
    /**
     * Date and time, when SMS messages were sent, in MySQL format.
     *
     * @var string|null
     */
    public ?string $dtl_message = null;

    /**
     * `true` if SMS was sent from task, `false` - if the staff member sent SMS.
     *
     * @var bool|null
     */
    public ?bool $is_automated = null;

    /**
     * `true` if staff member sent SMS, `false` - if the client sent the SMS.
     *
     * @var bool|null
     */
    public ?bool $is_outbound = null;

    /**
     * The key of SMS history.
     *
     * @var string|null
     */
    public ?string $k_sms_history = null;

    /**
     * Sid of the SMS status.
     *
     * @var string|null
     */
    public ?string $sid_sms_status = null;

    /**
     * The day when SMS messages were sent.
     *
     * @var string|null
     */
    public ?string $text_date = null;

    /**
     * The sender's name.
     *
     * @var string|null
     */
    public ?string $text_sender_name = null;

    /**
     * The body of the SMS.
     *
     * @var string|null
     */
    public ?string $text_sms_body = null;

    /**
     * The title of the SMS status.
     *
     * @var string|null
     */
    public ?string $text_sms_status = null;

    /**
     * The title of the mail type.
     *
     * @var string|null
     */
    public ?string $text_sms_type = null;

    /**
     * The time when SMS was sent.
     *
     * @var string|null
     */
    public ?string $text_time = null;

    /**
     * The UID of the sender, `null` - if SMS sent from task.
     *
     * @var string|null
     */
    public ?string $uid_sender = null;

    public function __construct(array $data)
    {
        $this->dtl_message = isset($data['dtl_message']) ? (string)$data['dtl_message'] : null;
        $this->is_automated = isset($data['is_automated']) ? (bool)$data['is_automated'] : null;
        $this->is_outbound = isset($data['is_outbound']) ? (bool)$data['is_outbound'] : null;
        $this->k_sms_history = isset($data['k_sms_history']) ? (string)$data['k_sms_history'] : null;
        $this->sid_sms_status = isset($data['sid_sms_status']) ? (string)$data['sid_sms_status'] : null;
        $this->text_date = isset($data['text_date']) ? (string)$data['text_date'] : null;
        $this->text_sender_name = isset($data['text_sender_name']) ? (string)$data['text_sender_name'] : null;
        $this->text_sms_body = isset($data['text_sms_body']) ? (string)$data['text_sms_body'] : null;
        $this->text_sms_status = isset($data['text_sms_status']) ? (string)$data['text_sms_status'] : null;
        $this->text_sms_type = isset($data['text_sms_type']) ? (string)$data['text_sms_type'] : null;
        $this->text_time = isset($data['text_time']) ? (string)$data['text_time'] : null;
        $this->uid_sender = isset($data['uid_sender']) ? (string)$data['uid_sender'] : null;
    }
}
