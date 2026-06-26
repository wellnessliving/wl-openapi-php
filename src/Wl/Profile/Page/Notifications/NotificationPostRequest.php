<?php

namespace WlSdk\Wl\Profile\Page\Notifications;

class NotificationPostRequest
{
    /**
     * Client's notifications settings.
     * Keys are notifications IDs, one of {@link \WlSdk\Wl\Profile\Page\Notifications\NotificationSid} constants,
     * values -
     *   `true` if a notification setting is ON, `false` - otherwise.
     *
     * @var int[]|null
     */
    public ?array $a_notification_list = null;

    /**
     * ID of source mode.
     * One of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the email, where unsubscribe link was clicked. Primary key in RsMailHistorySql table.
     *
     * @var string|null
     */
    public ?string $k_mail_history = null;

    /**
     * Secret string to check access.
     * Used only when `id_mode`={@link \WlSdk\Wl\Mode\ModeSid}.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * User ID. Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_notification_list' => $this->a_notification_list,
            'id_mode' => $this->id_mode,
            'k_business' => $this->k_business,
            'k_mail_history' => $this->k_mail_history,
            's_secret' => $this->s_secret,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
