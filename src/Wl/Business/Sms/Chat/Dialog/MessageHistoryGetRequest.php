<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

class MessageHistoryGetRequest
{
    /**
     * A count of SMS which need to return. Default value is 20.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Key of business for which need to get list of dialogs.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of SMS history.
     * If this key is set the API returns SMS histories that were sent before this SMS.
     * If this key isn't set the API returns the last sent 20 SMS histories.
     *
     * @var string|null
     */
    public ?string $k_sms_history_last = null;

    /**
     * UID of the client for which need to get SMS message history.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'i_limit' => $this->i_limit,
            'k_business' => $this->k_business,
            'k_sms_history_last' => $this->k_sms_history_last,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
