<?php

namespace WlSdk\Core\Push;

class PushPostRequest
{
    /**
     * Application ID. For example 'com.wellnessliving.com'.
     *
     * @var string|null
     */
    public ?string $s_application_id = null;

    /**
     * Device ID.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    /**
     * OS name.
     * String version of {@link \WlSdk\APushOsSid} constants.
     *
     * @var string|null
     */
    public ?string $sid_system = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            's_application_id' => $this->s_application_id,
            's_id' => $this->s_id,
            'sid_system' => $this->sid_system,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
