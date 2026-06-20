<?php

namespace WlSdk\Social\Microsoft;

/**
 * Response from GET
 */
class LoginGetResponse
{
    /**
     * If `true`, the user has a bound Microsoft account. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_exists = null;

    /**
     * The Microsoft OAuth 2.0 authorization link.
     *
     * @var string|null
     */
    public ?string $url_login = null;

    public function __construct(array $data)
    {
        $this->is_exists = isset($data['is_exists']) ? (bool)$data['is_exists'] : null;
        $this->url_login = isset($data['url_login']) ? (string)$data['url_login'] : null;
    }
}
