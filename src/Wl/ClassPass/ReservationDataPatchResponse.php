<?php

namespace WlSdk\Wl\ClassPass;

/**
 * Response from PATCH
 */
class ReservationDataPatchResponse
{
    /**
     * See `is_late_cancel` for documentation.
     *
     * `null` if not defined yet.
     *
     * @var bool|null
     */
    public ?bool $is_late_cancel = null;

    public function __construct(array $data)
    {
        $this->is_late_cancel = isset($data['is_late_cancel']) ? (bool)$data['is_late_cancel'] : null;
    }
}
