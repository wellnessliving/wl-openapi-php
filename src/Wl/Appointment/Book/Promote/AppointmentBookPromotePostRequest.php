<?php

namespace WlSdk\Wl\Appointment\Book\Promote;

class AppointmentBookPromotePostRequest
{
    /**
     * ID of the source where a visit was promoted, one of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * `null` if not initialized yet.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    /**
     * Business key. Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit key. Primary key in the RsVisitSql table.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mode' => $this->id_mode,
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            ],
            static fn ($v) => $v !== null
        );
    }
}
