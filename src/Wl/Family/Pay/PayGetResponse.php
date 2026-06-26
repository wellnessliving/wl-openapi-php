<?php

namespace WlSdk\Wl\Family\Pay;

/**
 * Response from GET
 */
class PayGetResponse
{
    /**
     * ID of user who will pay for user `uid`.
     * Primary key in PassportLoginAr table.
     * Empty if `uid` will pay for self.
     *
     * @var string|null
     */
    public ?string $uid_payer = null;

    public function __construct(array $data)
    {
        $this->uid_payer = isset($data['uid_payer']) ? (string)$data['uid_payer'] : null;
    }
}
