<?php

namespace WlSdk\Core\Prg\Editor;

class SqlKeywordGetResponseTable
{
    /**
     * Type of the column.
     *
     * @var string|null
     */
    public ?string $s_type = null;

    /**
     * Name of a table in which this column is a primary key.
     *
     *   Not specified if this column is not a primary key.
     *
     * @var string|null
     */
    public ?string $s_table = null;

    public function __construct(array $data)
    {
        $this->s_type = isset($data['s_type']) ? (string)$data['s_type'] : null;
        $this->s_table = isset($data['s_table']) ? (string)$data['s_table'] : null;
    }
}
