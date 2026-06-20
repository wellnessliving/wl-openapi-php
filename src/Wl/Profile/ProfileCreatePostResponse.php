<?php
namespace WlSdk\Wl\Profile;

/**
 * Response from POST
 */
class ProfileCreatePostResponse
{
    /**
     * The key of the user.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
