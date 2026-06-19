<?php
namespace WlSdk\Wl\Reception\Application;

/**
 * Response from POST
 */
class ReceptionAuthorizePostResponse
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_select = null;

    /**
     * Key of the authorized user.
     * 
     * Can be set only this field or `a_select`.
     * It depends, whether we found one user or multiple.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_select = isset($data['a_select']) ? (array)$data['a_select'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
