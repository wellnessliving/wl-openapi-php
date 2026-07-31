<?php

namespace WlSdk\Core\AI\LogTriage;

/**
 * Response from GET
 */
class ConnectionCheckGetResponse
{
    /**
     * Grouped log findings.
     *
     * One element contains:
     *
     * @var ConnectionCheckGetResponseLog[]|null
     */
    public ?array $a_log = null;

    /**
     * Connection check value.
     *
     * @var int|null
     */
    public ?int $i_result = null;

    public function __construct(array $data)
    {
        $this->a_log = isset($data['a_log']) ? array_map(static fn ($item) => new ConnectionCheckGetResponseLog((array)$item), (array)$data['a_log']) : null;
        $this->i_result = isset($data['i_result']) ? (int)$data['i_result'] : null;
    }
}
