<?php

namespace WlSdk\Wl\Mail\Group;

class MailGroupOpenPostRequest
{
    /**
     * Mail group ID. One of {@link \WlSdk\RsMailGroupSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsMailGroupSid
     */
    public ?int $id_mail_group = null;

    /**
     * `true` If mail group is hide, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_remove = null;

    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail_group' => $this->id_mail_group,
            'is_remove' => $this->is_remove,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
