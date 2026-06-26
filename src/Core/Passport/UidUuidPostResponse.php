<?php

namespace WlSdk\Core\Passport;

/**
 * Response from POST
 */
class UidUuidPostResponse
{
    /**
     * Associative array where key is UID (as string) and value is UUID (UUIDv8 string).
     * Contains merged and converted data from both input arrays.
     *
     * @var string[]|null
     */
    public ?array $a_uid_uuid = null;

    public function __construct(array $data)
    {
        $this->a_uid_uuid = isset($data['a_uid_uuid']) ? (array)$data['a_uid_uuid'] : null;
    }
}
