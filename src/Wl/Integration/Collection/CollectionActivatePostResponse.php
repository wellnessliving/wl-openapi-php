<?php

namespace WlSdk\Wl\Integration\Collection;

/**
 * Response from POST
 */
class CollectionActivatePostResponse
{
    /**
     * Defines whether business in testing mode.
     *
     * `true` if business in testing mode, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_test = null;

    public function __construct(array $data)
    {
        $this->is_test = isset($data['is_test']) ? (bool)$data['is_test'] : null;
    }
}
