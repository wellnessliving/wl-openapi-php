<?php

namespace WlSdk\Wl\Profile\Merge;

/**
 * Response from POST
 */
class ProfileMergePostResponse
{
    /**
     * Key of main user. Primary key in PassportLoginSql table.
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $uid_main = null;

    public function __construct(array $data)
    {
        $this->uid_main = isset($data['uid_main']) ? (string)$data['uid_main'] : null;
    }
}
