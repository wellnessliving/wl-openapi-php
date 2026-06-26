<?php

namespace WlSdk\Wl\Visit\Blame;

class CheckGetRequest
{
    /**
     * Visit status. One of {@link \WlSdk\Wl\Visit\VisitSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Visit\VisitSid
     */
    public ?int $id_visit = null;

    /**
     * ID of business. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit ID to get status for. Primary key in RsVisitSql table.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_visit' => $this->id_visit,
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            ],
            static fn ($v) => $v !== null
        );
    }
}
