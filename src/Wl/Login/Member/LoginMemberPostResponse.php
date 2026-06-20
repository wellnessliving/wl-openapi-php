<?php

namespace WlSdk\Wl\Login\Member;

/**
 * Response from POST
 */
class LoginMemberPostResponse
{
    /**
     * The date when client became a member.
     *
     * @var string|null
     */
    public ?string $dt_member = null;

    public function __construct(array $data)
    {
        $this->dt_member = isset($data['dt_member']) ? (string)$data['dt_member'] : null;
    }
}
