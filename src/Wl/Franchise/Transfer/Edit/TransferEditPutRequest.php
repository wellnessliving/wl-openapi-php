<?php

namespace WlSdk\Wl\Franchise\Transfer\Edit;

class TransferEditPutRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Franchise transfer key. Primary key in TransferSql table.
     *
     * @var string|null
     */
    public ?string $k_franchise_transfer = null;

    /**
     * New end date of temporary transfer.
     *
     * @var string|null
     */
    public ?string $dt_end_local = null;

    /**
     * New start date of temporary transfer.
     *
     * @var string|null
     */
    public ?string $dt_start_local = null;

    /**
     * Transfer period ID. One of {@link \WlSdk\Wl\Franchise\Transfer\TransferPeriodSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Franchise\Transfer\TransferPeriodSid
     */
    public ?int $id_transfer_period = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_franchise_transfer' => $this->k_franchise_transfer,
            'dt_end_local' => $this->dt_end_local,
            'dt_start_local' => $this->dt_start_local,
            'id_transfer_period' => $this->id_transfer_period,
            ],
            static fn ($v) => $v !== null
        );
    }
}
