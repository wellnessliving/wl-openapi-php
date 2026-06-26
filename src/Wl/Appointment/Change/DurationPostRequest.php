<?php

namespace WlSdk\Wl\Appointment\Change;

class DurationPostRequest
{
    /**
     * Array with state of client mail form.
     *
     * @var array|null
     */
    public ?array $a_mail_form_client = null;

    /**
     * Array with state of staff mail form.
     *
     * @var array|null
     */
    public ?array $a_mail_form_staff = null;

    /**
     * Duration change value.
     *
     * @var int|null
     */
    public ?int $i_duration_delta = null;

    /**
     * `true` if it is required to send notification about appointment change to client, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_notify_client = null;

    /**
     * `true` if it is required to send notification about appointment change to staff, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_notify_staff = null;

    /**
     * Appointment key.
     *
     * Empty value means not set.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * ID form.
     *
     * @var string|null
     */
    public ?string $s_form_id = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_mail_form_client' => $this->a_mail_form_client,
            'a_mail_form_staff' => $this->a_mail_form_staff,
            'i_duration_delta' => $this->i_duration_delta,
            'is_notify_client' => $this->is_notify_client,
            'is_notify_staff' => $this->is_notify_staff,
            'k_appointment' => $this->k_appointment,
            's_form_id' => $this->s_form_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
