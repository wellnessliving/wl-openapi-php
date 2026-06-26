<?php

namespace WlSdk\Wl\Login\Mail\Secondary;

class MailSecondaryDeleteRequest
{
    /**
     * Business key withing which the secondary contact is managed.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Secret string to validate access for non-registered user.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * Email address of the external secondary contact to delete.
     * Empty string if deleting a registered user secondary contact.
     *
     * Either `text_mail_secondary` or `uid_secondary` must be set for delete.
     *
     * @var string|null
     */
    public ?string $text_mail_secondary = null;

    /**
     * Key of the client whose activity notifications the secondary contacts receive.
     * Primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Key of the registered secondary contact to delete.
     * Primary key in PassportLoginSql.
     * Empty string if deleting an external secondary contact.
     *
     * Either `uid_secondary` or `text_mail_secondary` must be set for delete.
     *
     * @var string|null
     */
    public ?string $uid_secondary = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            's_secret' => $this->s_secret,
            'text_mail_secondary' => $this->text_mail_secondary,
            'uid' => $this->uid,
            'uid_secondary' => $this->uid_secondary,
            ],
            static fn ($v) => $v !== null
        );
    }
}
