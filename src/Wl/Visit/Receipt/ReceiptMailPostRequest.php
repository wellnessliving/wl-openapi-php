<?php

namespace WlSdk\Wl\Visit\Receipt;

class ReceiptMailPostRequest
{
    /**
     * Key of the business in which the visit is located.
     *
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The visit key for which the menu buttons will be generated.
     *
     * Primary key in the RsVisitSql table.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_visit' => $this->k_visit,
            ],
            static fn ($v) => $v !== null
        );
    }
}
