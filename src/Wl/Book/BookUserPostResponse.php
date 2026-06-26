<?php

namespace WlSdk\Wl\Book;

/**
 * Response from POST
 */
class BookUserPostResponse
{
    /**
     * Key in the storage to get a list of saved clients.
     *
     * @var string|null
     */
    public ?string $s_id = null;

    public function __construct(array $data)
    {
        $this->s_id = isset($data['s_id']) ? (string)$data['s_id'] : null;
    }
}
