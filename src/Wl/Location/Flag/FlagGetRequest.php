<?php

namespace WlSdk\Wl\Location\Flag;

class FlagGetRequest
{
    /**
     * User keys.
     * `null` if not set.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The user's key.
     * `null` if not set.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'k_location' => $this->k_location,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
