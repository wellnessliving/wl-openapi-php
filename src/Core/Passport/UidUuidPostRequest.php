<?php

namespace WlSdk\Core\Passport;

class UidUuidPostRequest
{
    /**
     * Indexed array of user UIDs.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Indexed array of UUIDs.
     *
     * @var string[]|null
     */
    public ?array $a_uuid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'a_uuid' => $this->a_uuid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
