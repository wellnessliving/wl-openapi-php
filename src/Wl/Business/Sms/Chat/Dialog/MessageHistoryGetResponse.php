<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

/**
 * Response from GET
 */
class MessageHistoryGetResponse
{
    /**
     * An array with SMS message history:
     *
     * @var MessageHistoryGetResponseMessageHistoryList|null
     */
    public ?MessageHistoryGetResponseMessageHistoryList $a_message_history_list = null;

    public function __construct(array $data)
    {
        $this->a_message_history_list = isset($data['a_message_history_list']) ? new MessageHistoryGetResponseMessageHistoryList((array)$data['a_message_history_list']) : null;
    }
}
