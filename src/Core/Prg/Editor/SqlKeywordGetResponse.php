<?php

namespace WlSdk\Core\Prg\Editor;

/**
 * Response from GET
 */
class SqlKeywordGetResponse
{
    /**
     * List of all MySQL connections.
     *
     * Key is name of a MySQL connection.
     *
     * Value is a list of tables in that connection.
     * Alternatively, value may have name of another connection - in a case a list of tables in these two
     * connections
     * are equal.
     *
     * @var string[][]|string[]|null
     */
    public $a_connection = null;

    /**
     * List of information about tables.
     *
     * Key is name of a table.
     * Value is an array with the following structure:
     *
     * @var SqlKeywordGetResponseTable[]|null
     */
    public ?array $a_table = null;

    public function __construct(array $data)
    {
        $this->a_connection = $data['a_connection'] ?? null;
        $this->a_table = isset($data['a_table']) ? array_map(static fn ($item) => new SqlKeywordGetResponseTable((array)$item), (array)$data['a_table']) : null;
    }
}
