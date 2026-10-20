<?php

namespace WlSdk\Core\AI\LogTriage;

/**
 * Response from GET
 */
class ConnectionCheckGetResponse
{
    /**
     * Grouped findings.
     *
     * One element contains:
     *
     * @var ConnectionCheckGetResponseFinding[]|null
     */
    public ?array $a_finding = null;

    public function __construct(array $data)
    {
        $this->a_finding = isset($data['a_finding']) ? array_map(static fn ($item) => new ConnectionCheckGetResponseFinding((array)$item), (array)$data['a_finding']) : null;
    }
}
