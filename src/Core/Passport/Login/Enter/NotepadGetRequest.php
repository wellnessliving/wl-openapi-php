<?php

namespace WlSdk\Core\Passport\Login\Enter;

class NotepadGetRequest
{
    /**
     * User login.
     *
     * If specified, additional information about user may be returned such as datacenter of the user.
     *
     * This value is only considered when {@link \WlSdk\Core\Amazon\Region\AmazonRegionSid} is not empty,
     * and {@link \WlSdk\Core\Amazon\Region\AmazonRegionSid} returns `false`.
     * In this case, regional cookie may be set, and the request may be forwarded internally to a different
     * datacenter.
     *
     * `null` if additional information is not needed.
     *
     * @var string|null
     */
    public ?string $s_login = null;

    /**
     * The session type to store the notepad in.
     *
     * This will be an empty string for a temporary session. Otherwise, you can use `system` for a system session.
     *
     * @var string|null
     */
    public ?string $s_type = null;

    public function params(): array
    {
        return array_filter(
            [
            's_login' => $this->s_login,
            's_type' => $this->s_type,
            ],
            static fn ($v) => $v !== null
        );
    }
}
