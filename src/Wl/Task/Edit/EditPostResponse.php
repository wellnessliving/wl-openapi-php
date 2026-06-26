<?php

namespace WlSdk\Wl\Task\Edit;

/**
 * Response from POST
 */
class EditPostResponse
{
    /**
     * Task key.
     *
     * `null` means not set.
     *
     * @var string|null
     */
    public ?string $k_task = null;

    public function __construct(array $data)
    {
        $this->k_task = isset($data['k_task']) ? (string)$data['k_task'] : null;
    }
}
