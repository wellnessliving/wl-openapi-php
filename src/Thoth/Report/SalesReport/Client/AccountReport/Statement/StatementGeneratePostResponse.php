<?php

namespace WlSdk\Thoth\Report\SalesReport\Client\AccountReport\Statement;

/**
 * Response from POST
 */
class StatementGeneratePostResponse
{
    /**
     * Statement key.
     *
     * @var string|null
     */
    public ?string $k_statement = null;

    public function __construct(array $data)
    {
        $this->k_statement = isset($data['k_statement']) ? (string)$data['k_statement'] : null;
    }
}
