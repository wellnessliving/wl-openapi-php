<?php

namespace WlSdk\Wl\Reception\Application;

/**
 * Response from POST
 */
class ReceptionAuthorizePostResponse
{
    /**
     * List of the users, which can be authorized.
     *
     * Can be set only this field or {@link \WlSdk\Wl\Reception\Application\ReceptionAuthorizePostResponse::$uid}.
     * It depends, whether we found one user or multiple.
     *
     * @var ReceptionAuthorizePostResponseSelect[]|null
     */
    public ?array $a_select = null;

    /**
     * Key of the authorized user.
     *
     * Can be set only this field or {@link
     * \WlSdk\Wl\Reception\Application\ReceptionAuthorizePostResponse::$a_select}.
     * It depends, whether we found one user or multiple.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_select = isset($data['a_select']) ? array_map(static fn ($item) => new ReceptionAuthorizePostResponseSelect((array)$item), (array)$data['a_select']) : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
