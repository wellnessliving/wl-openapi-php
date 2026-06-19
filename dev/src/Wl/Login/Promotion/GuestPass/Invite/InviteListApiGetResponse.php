<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

/**
 * Response from GET
 */
class InviteListApiGetResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? (array)$data['a_list'] : null;
    }
}
