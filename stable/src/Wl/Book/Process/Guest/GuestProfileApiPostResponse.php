<?php
namespace WlSdk\Wl\Book\Process\Guest;

/**
 * Response from POST
 */
class GuestProfileApiPostResponse
{
    /**
     * UID of found or created user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
