<?php

namespace WlSdk\Wl\Notification\Send;

class MessageSendGetRequest
{
    /**
     * List of users for sent message to. Each value is a primary key from PassportLoginSql table.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * ID of the notification. One of {@link \WlSdk\RsMailSid} constants. `0` for empty template.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * Type of the notification. One of {@link \WlSdk\RsMailFormSid} constants. `0` if not set.
     *
     * @var int|null
     * @see \WlSdk\RsMailFormSid
     */
    public ?int $id_mail_form = null;

    /**
     * Key of the business where notification should be sent. Primary key in RsBusinessSql table.
     * Empty string if not set.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'id_mail' => $this->id_mail,
            'id_mail_form' => $this->id_mail_form,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
