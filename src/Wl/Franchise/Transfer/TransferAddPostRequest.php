<?php

namespace WlSdk\Wl\Franchise\Transfer;

class TransferAddPostRequest
{
    /**
     * End date of temporary transfer.
     * Set if `id_transfer_period` equals to
     * {@link \WlSdk\Wl\Franchise\Transfer\TransferPeriodSid} constant, otherwise `null`.
     *
     * @var string|null
     */
    public ?string $dt_end_local = null;

    /**
     * Start date of temporary transfer.
     * Set if `id_transfer_period` equals to
     * {@link \WlSdk\Wl\Franchise\Transfer\TransferPeriodSid} constant, otherwise `null`.
     *
     * @var string|null
     */
    public ?string $dt_start_local = null;

    /**
     * Number of days of temporary transfer.
     * Set if `id_transfer_period` equals to
     * {@link \WlSdk\Wl\Franchise\Transfer\TransferPeriodSid} constant, otherwise `null`.
     *
     * @var int|null
     * @see \WlSdk\Wl\Franchise\Transfer\TransferPeriodSid
     */
    public ?int $i_day = null;

    /**
     * Transfer direction ID. One of {@link \WlSdk\Wl\Franchise\Transfer\TransferDirectionSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Franchise\Transfer\TransferDirectionSid
     */
    public ?int $id_transfer_direction = null;

    /**
     * Transfer period ID. One of {@link \WlSdk\Wl\Franchise\Transfer\TransferPeriodSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Franchise\Transfer\TransferPeriodSid
     */
    public ?int $id_transfer_period = null;

    /**
     * Business key. Primary key in RsBusinessSql table.
     * This is business in which the transfer takes place.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Location key. Primary key in RsLocationSql table.
     * This is a location where the transfer takes place.
     *
     * @var string|null
     */
    public ?string $k_location_to = null;

    /**
     * Transferred user key. Primary key in the PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid_transfer = null;

    public function params(): array
    {
        return array_filter(
            [
            'dt_end_local' => $this->dt_end_local,
            'dt_start_local' => $this->dt_start_local,
            'i_day' => $this->i_day,
            'id_transfer_direction' => $this->id_transfer_direction,
            'id_transfer_period' => $this->id_transfer_period,
            'k_business' => $this->k_business,
            'k_location_to' => $this->k_location_to,
            'uid_transfer' => $this->uid_transfer,
            ],
            static fn ($v) => $v !== null
        );
    }
}
