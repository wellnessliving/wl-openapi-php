<?php

namespace WlSdk\Wl\Business\Partner\Dashboard;

class DashboardGetRequest
{
    /**
     * Chart format ID. One of {@link \WlSdk\Wl\Business\Partner\Dashboard\ChartEarningsSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Business\Partner\Dashboard\ChartEarningsSid
     */
    public ?int $id_chart = null;

    /**
     * Key of the business. Primary key from  RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_chart' => $this->id_chart,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
