<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass;

/**
 * Response from GET
 */
class GuestPassGetResponse
{
    /**
     * Guest pass information.
     *
     * @var GuestPassGetResponseGuestPass|null
     */
    public ?GuestPassGetResponseGuestPass $a_guest_pass = null;

    public function __construct(array $data)
    {
        $this->a_guest_pass = isset($data['a_guest_pass']) ? new GuestPassGetResponseGuestPass((array)$data['a_guest_pass']) : null;
    }
}
