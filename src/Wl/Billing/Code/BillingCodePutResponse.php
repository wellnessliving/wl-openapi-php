<?php

namespace WlSdk\Wl\Billing\Code;

/**
 * Response from PUT
 */
class BillingCodePutResponse
{
    /**
     * Key of the custom billing code.
     *
     * @var string|null
     */
    public ?string $k_code = null;

    public function __construct(array $data)
    {
        $this->k_code = isset($data['k_code']) ? (string)$data['k_code'] : null;
    }
}
