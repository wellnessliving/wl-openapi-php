<?php

namespace WlSdk\Wl\Mail\Pattern\Live;

class MailPatternLiveDeleteRequest
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
     * Optional reason, why campaign was removed. Entered by the user.
     *
     * @var string|null
     */
    public ?string $text_reason = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail_form' => $this->id_mail_form,
            'k_business' => $this->k_business,
            'k_mail_pattern_live' => $this->k_mail_pattern_live,
            'text_reason' => $this->text_reason,
            ],
            static fn ($v) => $v !== null
        );
    }
}
