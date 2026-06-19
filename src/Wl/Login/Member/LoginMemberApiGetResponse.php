<?php
namespace WlSdk\Wl\Login\Member;

/**
 * Response from GET
 */
class LoginMemberApiGetResponse
{
    /**
     * The user's ID to get/set.
     *
     * @var string|null
     */
    public ?string $s_member = null;

    public function __construct(array $data)
    {
        $this->s_member = isset($data['s_member']) ? (string)$data['s_member'] : null;
    }
}
