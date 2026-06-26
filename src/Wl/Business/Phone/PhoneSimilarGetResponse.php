<?php

namespace WlSdk\Wl\Business\Phone;

/**
 * Response from GET
 */
class PhoneSimilarGetResponse
{
    /**
     * Array of phone numbers, which were got from provider.
     * Amount of phone numbers is based on `PHONE_AMOUNT`.
     *
     * Structure of this array is:
     *
     * @var PhoneSimilarGetResponsePhone|null
     */
    public ?PhoneSimilarGetResponsePhone $a_phone = null;

    public function __construct(array $data)
    {
        $this->a_phone = isset($data['a_phone']) ? new PhoneSimilarGetResponsePhone((array)$data['a_phone']) : null;
    }
}
