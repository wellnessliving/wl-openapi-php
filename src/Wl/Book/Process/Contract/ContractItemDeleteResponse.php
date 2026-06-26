<?php

namespace WlSdk\Wl\Book\Process\Contract;

/**
 * Response from DELETE
 */
class ContractItemDeleteResponse
{
    /**
     * Whether there remains a selected purchase item that grants access to the class.
     *
     * @var bool|null
     */
    public ?bool $has_valid_purchase = null;

    public function __construct(array $data)
    {
        $this->has_valid_purchase = isset($data['has_valid_purchase']) ? (bool)$data['has_valid_purchase'] : null;
    }
}
