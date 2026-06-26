<?php

namespace WlSdk\Wl\Appointment\View;

class LinkJoinPostRequest
{
    /**
     * Key of non-integrated virtual appointment.
     * Primary key from RsAppointmentSql.
     *
     * @var string|null
     */
    public ?string $k_appointment = null;

    /**
     * Key of business for which appointment belongs.
     * Primary key from RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Join link for non-integrated virtual appointment.
     *
     * @var string|null
     */
    public ?string $url_join = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_appointment' => $this->k_appointment,
            'k_business' => $this->k_business,
            'url_join' => $this->url_join,
            ],
            static fn ($v) => $v !== null
        );
    }
}
