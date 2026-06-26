<?php

namespace WlSdk\Wl\Profile\Overview;

class SendMailPostRequest
{
    /**
     * ID of the email.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * UID of a user for whom an email should be sent. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail' => $this->id_mail,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
