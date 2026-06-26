<?php

namespace WlSdk\Wl\Integration\FacilityAccess\Brivo;

/**
 * Response from POST
 */
class UpgradePostResponse
{
    /**
     * Next billing date.
     *
     * @var string|null
     */
    public ?string $dtl_date = null;

    public function __construct(array $data)
    {
        $this->dtl_date = isset($data['dtl_date']) ? (string)$data['dtl_date'] : null;
    }
}
