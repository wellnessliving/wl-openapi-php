<?php

namespace WlSdk\Wl\Business\Sms;

class SmsUsageGetRequest
{
    /**
     * Member group keys.
     *
     * @var array|null
     */
    public ?array $a_member_group = null;

    /**
     * Quantity of segments af a message to send. Depends on the length of a message.
     *
     * @var int|null
     */
    public ?int $i_sms_segments = null;

    /**
     * Number of receivers to send SMS to.
     *
     * @var int|null
     */
    public ?int $i_uid = null;

    /**
     * UIDs of users to send sms to in JSON format. Is set if sms is sent from an attendance list, Marketing.
     *
     * @var string|null
     */
    public ?string $json_uid_select = null;

    /**
     * Key of the business. Primary key RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Session key of selected users (in report).
     *
     * @var string|null
     */
    public ?string $s_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_member_group' => $this->a_member_group,
            'i_sms_segments' => $this->i_sms_segments,
            'i_uid' => $this->i_uid,
            'json_uid_select' => $this->json_uid_select,
            'k_business' => $this->k_business,
            's_id' => $this->s_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
