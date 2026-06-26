<?php

namespace WlSdk\Wl\Business\Account;

/**
 * Response from GET
 */
class PayMethodGetResponse
{
    /**
     * Returns default recurrent payment source for business.
     *
     * `null` if source not managed and automatic payments for business are not available.
     *
     * @var string|null
     */
    public ?string $k_pay_recurrent = null;

    public function __construct(array $data)
    {
        $this->k_pay_recurrent = isset($data['k_pay_recurrent']) ? (string)$data['k_pay_recurrent'] : null;
    }
}
