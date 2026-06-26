<?php

namespace WlSdk\Wl\Mail\Pattern\Live;

class MailPatternLiveRecipientDeleteRequest
{
    /**
     * ID of the form campaign.
     *
     * @var int|null
     * @see \WlSdk\RsMailFormSid
     */
    public ?int $id_mail_form = null;

    /**
     * Key of the business to remove scheduled campaign from.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the mail pattern to remove scheduled campaign from.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern_live = null;

    /**
     * Key of the recipient to be removed.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail_form' => $this->id_mail_form,
            'k_business' => $this->k_business,
            'k_mail_pattern_live' => $this->k_mail_pattern_live,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
