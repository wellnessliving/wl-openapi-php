<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQuerySchemaGetResponseTableColumn
{
    /**
     * Column name as used in SQL.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * PHP type name (`int`, `string`, ...).
     *
     * @var string|null
     */
    public ?string $s_type = null;

    /**
     * Human-readable description from PHPDoc.
     *
     * @var string|null
     */
    public ?string $text_hint = null;

    public function __construct(array $data)
    {
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->s_type = isset($data['s_type']) ? (string)$data['s_type'] : null;
        $this->text_hint = isset($data['text_hint']) ? (string)$data['text_hint'] : null;
    }
}
