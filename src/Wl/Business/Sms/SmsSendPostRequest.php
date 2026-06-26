<?php

namespace WlSdk\Wl\Business\Sms;

class SmsSendPostRequest
{
    /**
     * Key of the business. Primary key RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The unique key of the sent SMS.
     *
     * @var string|null
     */
    public ?string $s_key = null;

    /**
     * The body of the sms.
     *
     * @var string|null
     */
    public ?string $text_sms_body = null;

    /**
     * User key for which need to send the sms. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_key' => $this->s_key,
            'text_sms_body' => $this->text_sms_body,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
