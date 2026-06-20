<?php

namespace WlSdk\Wl\Login\Search;

/**
 * Response from GET
 */
class ConcertoGetResponse
{
    /**
     * User's primary key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
