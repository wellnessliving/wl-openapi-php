<?php

namespace WlSdk\Wl\Franchise\Transfer;

class TransferStatusPutRequest
{
    /**
     * Transfer status ID. One of {@link \WlSdk\Wl\Franchise\Transfer\TransferStatusSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Franchise\Transfer\TransferStatusSid
     */
    public ?int $id_transfer_status = null;

    /**
     * Business key. Primary key in RsBusinessSql table.
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
     * Reason of transfer status.
     *
     * @var string|null
     */
    public ?string $text_reason = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_transfer_status' => $this->id_transfer_status,
            'k_business' => $this->k_business,
            'k_franchise_transfer' => $this->k_franchise_transfer,
            'text_reason' => $this->text_reason,
            ],
            static fn ($v) => $v !== null
        );
    }
}
