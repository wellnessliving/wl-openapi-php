<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQuerySchemaGetResponseTable
{
    /**
     * `true` if the table may be used as the first (driving) table in FROM.
     *
     * @var bool|null
     */
    public ?bool $is_first_allowed = null;

    /**
     * `true` if the table honours `@dl_start`/`@dl_end` placeholders.
     *
     * @var bool|null
     */
    public ?bool $has_date_filter = null;

    /**
     * Column descriptors. Each:
     *
     * @var ReportQuerySchemaGetResponseTableColumn|null
     */
    public ?ReportQuerySchemaGetResponseTableColumn $a_column = null;

    public function __construct(array $data)
    {
        $this->is_first_allowed = isset($data['is_first_allowed']) ? (bool)$data['is_first_allowed'] : null;
        $this->has_date_filter = isset($data['has_date_filter']) ? (bool)$data['has_date_filter'] : null;
        $this->a_column = isset($data['a_column']) ? new ReportQuerySchemaGetResponseTableColumn((array)$data['a_column']) : null;
    }
}
