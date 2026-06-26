<?php

namespace WlSdk\Wl\Franchise\Fee;

/**
 * Response from POST
 */
class FeeElementPostResponse
{
    /**
     * Franchise fee key.
     *
     * `null` when creating new fee.
     *
     * @var string|null
     */
    public ?string $k_franchise_fee = null;

    public function __construct(array $data)
    {
        $this->k_franchise_fee = isset($data['k_franchise_fee']) ? (string)$data['k_franchise_fee'] : null;
    }
}
