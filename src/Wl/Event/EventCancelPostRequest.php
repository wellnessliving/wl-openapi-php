<?php

namespace WlSdk\Wl\Event;

class EventCancelPostRequest
{
    /**
     * `true` is late cancel, `false` reservation is not late cancel.
     * This is required to enable late cancel even if the user is staff.
     *
     * @var bool|null
     */
    public ?bool $is_late_cancel = null;

    /**
     * Key of the business to which the visit belongs.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Book ID.
     * Primary key in table RsVisitSql.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Visit source. One of {@link \WlSdk\Wl\Mode\ModeSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_late_cancel' => $this->is_late_cancel,
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            'id_mode' => $this->id_mode,
            ],
            static fn ($v) => $v !== null
        );
    }
}
