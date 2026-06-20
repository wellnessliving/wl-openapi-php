<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Invite;

/**
 * Response from GET
 */
class InviteListGetResponse
{
    /**
     * List of guest pass invitations suitable for the specific request parameters.
     *
     * @var InviteListGetResponseList[]|null
     */
    public ?array $a_list = null;

    public function __construct(array $data)
    {
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new InviteListGetResponseList((array)$item), (array)$data['a_list']) : null;
    }
}
