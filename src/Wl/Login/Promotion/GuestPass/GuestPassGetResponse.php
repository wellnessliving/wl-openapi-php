<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass;

/**
 * Response from GET
 */
class GuestPassGetResponse
{
    /**
     * No description.
     *
     * @var GuestPassGetResponseGuestPass[]|null
     */
    public ?array $a_guest_pass = null;

    public function __construct(array $data)
    {
        $this->a_guest_pass = isset($data['a_guest_pass']) ? array_map(static fn ($item) => new GuestPassGetResponseGuestPass((array)$item), (array)$data['a_guest_pass']) : null;
    }
}
