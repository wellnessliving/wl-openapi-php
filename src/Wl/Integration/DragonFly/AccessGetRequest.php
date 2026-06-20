<?php

namespace WlSdk\Wl\Integration\DragonFly;

class AccessGetRequest
{
    /**
     * The location key.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The member ID.
     * Member ID is intended to work with barcode scanners.
     * If this is specified the user key does not need to be set.
     *
     * @var string|null
     */
    public ?string $s_member = null;

    /**
     * The user key.
     * This should be specified if the member ID is not set or not known.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_location' => $this->k_location,
            's_member' => $this->s_member,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
