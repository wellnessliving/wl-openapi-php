<?php

namespace WlSdk\Social\Facebook\Login;

/**
 * Response from GET
 */
class LoginBindGetResponse
{
    /**
     * User ID in Facebook.
     *
     * @var string|null
     */
    public ?string $i_facebook = null;

    /**
     * `true` - profile is bound to Facebook; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_exists = null;

    public function __construct(array $data)
    {
        $this->i_facebook = isset($data['i_facebook']) ? (string)$data['i_facebook'] : null;
        $this->is_exists = isset($data['is_exists']) ? (bool)$data['is_exists'] : null;
    }
}
