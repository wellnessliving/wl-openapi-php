<?php

namespace WlSdk\Wl\Service\Edit;

class NotificationCustomizationGetRequest
{
    /**
     * ID of confirmation/reminder mail. One of {@link \WlSdk\RsMailSid} constants.
     *
     * `null` when not initialized.
     *
     * @var int|null
     * @see \WlSdk\RsMailSid
     */
    public ?int $id_mail = null;

    /**
     * The key of the business to which the confirmation/reminder mail belongs.
     *
     * `null` when not initialized.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of mail pattern.
     *
     * `null` for a create request.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern_live = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail' => $this->id_mail,
            'k_business' => $this->k_business,
            'k_mail_pattern_live' => $this->k_mail_pattern_live,
            ],
            static fn ($v) => $v !== null
        );
    }
}
