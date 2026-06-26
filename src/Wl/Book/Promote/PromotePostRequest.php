<?php

namespace WlSdk\Wl\Book\Promote;

class PromotePostRequest
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
     * ID of business. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Visit ID to promote. Primary key in RsVisitSql table.
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
