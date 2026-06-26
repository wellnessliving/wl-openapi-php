<?php

namespace WlSdk\Wl\Zapier\Lead\Action;

/**
 * Response from POST
 */
class CreatePostResponse
{
    /**
     * Captured user.
     * Primary key in PassportLoginSql table.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
