<?php

namespace WlSdk\Wl\Profile\Edit;

/**
 * Response from POST
 */
class CreatePostResponse
{
    /**
     * The key of the user added.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
