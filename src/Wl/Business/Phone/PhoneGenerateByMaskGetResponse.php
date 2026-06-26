<?php

namespace WlSdk\Wl\Business\Phone;

/**
 * Response from GET
 */
class PhoneGenerateByMaskGetResponse
{
    /**
     * Array of phone numbers, which were got from provider.
     * Amount of phone numbers is based on `PHONE_AMOUNT`.
     *
     * Structure of this array is:
     *
     * @var PhoneGenerateByMaskGetResponsePhone|null
     */
    public ?PhoneGenerateByMaskGetResponsePhone $a_phone = null;

    public function __construct(array $data)
    {
        $this->a_phone = isset($data['a_phone']) ? new PhoneGenerateByMaskGetResponsePhone((array)$data['a_phone']) : null;
    }
}
