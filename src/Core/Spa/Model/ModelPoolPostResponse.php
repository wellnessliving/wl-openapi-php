<?php

namespace WlSdk\Core\Spa\Model;

/**
 * Response from POST
 */
class ModelPoolPostResponse
{
    /**
     * Model result.
     *
     * @var array|null
     */
    public ?array $a_result = null;

    public function __construct(array $data)
    {
        $this->a_result = isset($data['a_result']) ? (array)$data['a_result'] : null;
    }
}
