<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass;

/**
 * Response from GET
 */
class GuestPassApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_guest_pass = null;

    public function __construct(array $data)
    {
        $this->a_guest_pass = isset($data['a_guest_pass']) ? (array)$data['a_guest_pass'] : null;
    }
}
