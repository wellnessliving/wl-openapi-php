<?php

namespace WlSdk\Social\Twitter\Login;

/**
 * Response from GET
 */
class LoginGetResponse
{
    /**
     * User ID in Twitter.
     *
     * @var string|null
     */
    public ?string $i_twitter = null;

    /**
     * `true` - profile is linked to Twitter; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_exists = null;

    public function __construct(array $data)
    {
        $this->i_twitter = isset($data['i_twitter']) ? (string)$data['i_twitter'] : null;
        $this->is_exists = isset($data['is_exists']) ? (bool)$data['is_exists'] : null;
    }
}
