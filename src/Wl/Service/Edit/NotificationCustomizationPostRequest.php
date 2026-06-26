<?php

namespace WlSdk\Wl\Service\Edit;

class NotificationCustomizationPostRequest
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
     * Name of the service (class, event, appointment).
     *
     * @var string|null
     */
    public ?string $text_service_name = null;

    /**
     * Type of the service (class, event, appointment).
     *
     * @var string|null
     */
    public ?string $text_service_type = null;

    /**
     * Information about sending a confirmation/reminder notification.
     *
     * @var array|null
     */
    public ?array $a_notification = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail' => $this->id_mail,
            'k_business' => $this->k_business,
            'text_service_name' => $this->text_service_name,
            'text_service_type' => $this->text_service_type,
            'a_notification' => $this->a_notification,
            ],
            static fn ($v) => $v !== null
        );
    }
}
