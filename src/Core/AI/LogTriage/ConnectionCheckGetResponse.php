<?php

namespace WlSdk\Core\AI\LogTriage;

/**
 * Response from GET
 */
class ConnectionCheckGetResponse
{
    /**
     * Connection check value.
     *
     * @var int|null
     */
    public ?int $i_result = null;

    public function __construct(array $data)
    {
        $this->i_result = isset($data['i_result']) ? (int)$data['i_result'] : null;
    }
}
