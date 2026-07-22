<?php

namespace WlSdk\Wl\Billing\Bulk;

/**
 * Response from POST
 */
class BulkBillingPostResponse
{
    /**
     * The key of the created purchase batch.
     *
     * @var string|null
     */
    public ?string $k_purchase_batch = null;

    public function __construct(array $data)
    {
        $this->k_purchase_batch = isset($data['k_purchase_batch']) ? (string)$data['k_purchase_batch'] : null;
    }
}
