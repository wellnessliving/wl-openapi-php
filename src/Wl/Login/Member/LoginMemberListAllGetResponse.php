<?php
namespace WlSdk\Wl\Login\Member;

/**
 * Response from GET
 */
class LoginMemberListAllGetResponse
{
    /**
     * List of UIDs for all active clients that belong to the business.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    public function __construct(array $data)
    {
        $this->a_uid = isset($data['a_uid']) ? (array)$data['a_uid'] : null;
    }
}
