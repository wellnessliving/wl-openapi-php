<?php

namespace WlSdk\Wl\Franchise\Transfer\Edit;

/**
 * Response from GET
 */
class TransferEditGetResponse
{
    /**
     * `true` if transfer can be edited to permanent, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $can_permanent = null;

    /**
     * Current end date of temporary transfer.
     *
     * @var string|null
     */
    public ?string $dt_end_current_local = null;

    /**
     * Current start date of temporary transfer.
     *
     * @var string|null
     */
    public ?string $dt_start_current_local = null;

    /**
     * Franchise transfer direction.
     *
     * @var int|null
     */
    public ?int $id_transfer_direction = null;

    public function __construct(array $data)
    {
        $this->can_permanent = isset($data['can_permanent']) ? (bool)$data['can_permanent'] : null;
        $this->dt_end_current_local = isset($data['dt_end_current_local']) ? (string)$data['dt_end_current_local'] : null;
        $this->dt_start_current_local = isset($data['dt_start_current_local']) ? (string)$data['dt_start_current_local'] : null;
        $this->id_transfer_direction = isset($data['id_transfer_direction']) ? (int)$data['id_transfer_direction'] : null;
    }
}
