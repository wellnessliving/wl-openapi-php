<?php

namespace WlSdk\Wl\Login\Promotion\Cancel;

class MailPatternLiveGetRequest
{
    /**
     * Primary key of business in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * SID of notification form. String representation of one from {@link \WlSdk\RsMailFormSid} class constants.
     * `null` if not initialized.
     *
     * @var string|null
     */
    public ?string $sid_mail_form = null;

    /**
     * UID user's key of the actor. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'sid_mail_form' => $this->sid_mail_form,
            'uid_actor' => $this->uid_actor,
            ],
            static fn ($v) => $v !== null
        );
    }
}
