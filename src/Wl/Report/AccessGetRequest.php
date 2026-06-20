<?php

namespace WlSdk\Wl\Report;

class AccessGetRequest
{
    /**
     * Report CID.
     *
     * It's used mostly for second generation reports.
     * For first generation reports use `id_report` instead.
     *
     * Only one of these two fields should be sent, but not both.
     *
     * @var int|null
     */
    public ?int $cid_report = null;

    /**
     * Report ID.
     *
     * It's used mostly for first generation reports.
     * For second generation reports use `cid_report` instead.
     *
     * Only one of these two fields should be sent, but not both.
     *
     * @var int|null
     */
    public ?int $id_report = null;

    /**
     * ID of business for which access must be checked.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_report' => $this->cid_report,
            'id_report' => $this->id_report,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
