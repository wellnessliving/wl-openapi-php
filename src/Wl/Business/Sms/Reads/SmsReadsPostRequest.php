<?php

namespace WlSdk\Wl\Business\Sms\Reads;

class SmsReadsPostRequest
{
    /**
     * Key of the business. Primary key RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key with whom you want to read messages.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
