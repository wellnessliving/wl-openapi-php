<?php

namespace WlSdk\Core\Prg\PgSql;

class QueryExecutePostRequest
{
    /**
     * `true` if the query must be executed on behalf of the root,
     * `false` if the query must be executed on behalf of a normal user with limited rights.
     *
     * @var bool|null
     */
    public ?bool $is_root = null;

    /**
     * The connection key to execute PostgreSQL query.
     * One of the result keys of the QueryPgSqlExecute::connectionList() method.
     *
     * @var string|null
     */
    public ?string $s_connection = null;

    /**
     * PostgreSQL query to execute.
     *
     * @var string|null
     */
    public ?string $s_pgsql_query = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_root' => $this->is_root,
            's_connection' => $this->s_connection,
            's_pgsql_query' => $this->s_pgsql_query,
            ],
            static fn ($v) => $v !== null
        );
    }
}
