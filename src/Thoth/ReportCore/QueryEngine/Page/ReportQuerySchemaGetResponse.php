<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

/**
 * Response from GET
 */
class ReportQuerySchemaGetResponse
{
    /**
     * Registered row actions available for use in `json_actions`.
     *
     * Each entry:
     *
     * @var ReportQuerySchemaGetResponseAction|null
     */
    public ?ReportQuerySchemaGetResponseAction $a_action = null;

    /**
     * Supported format hints for SELECT-alias dot-suffixes.
     *
     * Each entry:
     *
     * @var ReportQuerySchemaGetResponseFormat|null
     */
    public ?ReportQuerySchemaGetResponseFormat $a_format = null;

    /**
     * Built-in `@placeholder` variables supported by all tables that honour date-range filtering.
     *
     * Each entry:
     *
     * @var ReportQuerySchemaGetResponsePlaceholder|null
     */
    public ?ReportQuerySchemaGetResponsePlaceholder $a_placeholder = null;

    /**
     * Registered tables keyed by SQL table name.
     *
     * Each value:
     *
     * @var ReportQuerySchemaGetResponseTable|null
     */
    public ?ReportQuerySchemaGetResponseTable $a_table = null;

    /**
     * Supported aggregate functions for the `json_totals` field.
     *
     * Each entry:
     *
     * @var ReportQuerySchemaGetResponseTotal|null
     */
    public ?ReportQuerySchemaGetResponseTotal $a_total = null;

    /**
     * User View field groups keyed by logical section name.
     *
     * Each value is an array of field descriptors for the User View reference panel:
     *
     * @var ReportQuerySchemaGetResponseUserField|null
     */
    public ?ReportQuerySchemaGetResponseUserField $a_user_field = null;

    public function __construct(array $data)
    {
        $this->a_action = isset($data['a_action']) ? new ReportQuerySchemaGetResponseAction((array)$data['a_action']) : null;
        $this->a_format = isset($data['a_format']) ? new ReportQuerySchemaGetResponseFormat((array)$data['a_format']) : null;
        $this->a_placeholder = isset($data['a_placeholder']) ? new ReportQuerySchemaGetResponsePlaceholder((array)$data['a_placeholder']) : null;
        $this->a_table = isset($data['a_table']) ? new ReportQuerySchemaGetResponseTable((array)$data['a_table']) : null;
        $this->a_total = isset($data['a_total']) ? new ReportQuerySchemaGetResponseTotal((array)$data['a_total']) : null;
        $this->a_user_field = isset($data['a_user_field']) ? new ReportQuerySchemaGetResponseUserField((array)$data['a_user_field']) : null;
    }
}
