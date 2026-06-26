<?php

namespace WlSdk\Core\Prg\PgSql;

/**
 * Response from POST
 */
class QueryExecutePostResponse
{
    /**
     * Result of the executing query.
     *
     * @var string|null
     */
    public ?string $html_body = null;

    public function __construct(array $data)
    {
        $this->html_body = isset($data['html_body']) ? (string)$data['html_body'] : null;
    }
}
