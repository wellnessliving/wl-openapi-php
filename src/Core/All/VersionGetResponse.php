<?php

namespace WlSdk\Core\All;

/**
 * Response from GET
 */
class VersionGetResponse
{
    /**
     * Current application version number.
     *
     * @var string|null
     */
    public ?string $s_version = null;

    public function __construct(array $data)
    {
        $this->s_version = isset($data['s_version']) ? (string)$data['s_version'] : null;
    }
}
