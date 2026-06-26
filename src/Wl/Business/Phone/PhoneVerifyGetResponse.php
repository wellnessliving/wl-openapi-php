<?php

namespace WlSdk\Wl\Business\Phone;

/**
 * Response from GET
 */
class PhoneVerifyGetResponse
{
    /**
     * `true` if phone number is not registered in system yet.
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_new_number = null;

    public function __construct(array $data)
    {
        $this->is_new_number = isset($data['is_new_number']) ? (bool)$data['is_new_number'] : null;
    }
}
