<?php
namespace WlSdk\Wl\Social\Share;

/**
 * Response from POST
 */
class SocialShareApiPostResponse
{
    /**
     * Secret key for access shared object.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    public function __construct(array $data)
    {
        $this->s_secret = isset($data['s_secret']) ? (string)$data['s_secret'] : null;
    }
}
