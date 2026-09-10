<?php

namespace WlSdk\Wl\Business\Sms;

/**
 * Response from POST
 */
class SmsSendPostResponse
{
    /**
     * Local date with time when sms sent successfully (or failed) in MySQL format.
     *
     * If business is not specified, will not be returned.
     *
     * @var string|null
     */
    public ?string $dtl_send = null;

    /**
     * The body of the SMS that is actually sent to the client - the same text as
     * {@link \WlSdk\Wl\Business\Sms\SmsSend}, but with every link replaced by a short link.
     *
     * The client side uses this value to refresh the message that is already shown in the chat, so the staff
     * member
     * sees exactly the same text that the client receives.
     *
     * Equals to the text that was posted if it contains no links, or if none of the links could be shortened.
     *
     * @var string|null
     */
    public ?string $text_sms_body_short = null;

    public function __construct(array $data)
    {
        $this->dtl_send = isset($data['dtl_send']) ? (string)$data['dtl_send'] : null;
        $this->text_sms_body_short = isset($data['text_sms_body_short']) ? (string)$data['text_sms_body_short'] : null;
    }
}
