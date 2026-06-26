<?php

namespace WlSdk\Wl\Import\Migration\Cookie;

/**
 * Response from GET
 */
class CookieGeneralGetResponse
{
    /**
     * Cookie key.
     *
     * @var string|null
     */
    public ?string $s_cookie = null;

    public function __construct(array $data)
    {
        $this->s_cookie = isset($data['s_cookie']) ? (string)$data['s_cookie'] : null;
    }
}
