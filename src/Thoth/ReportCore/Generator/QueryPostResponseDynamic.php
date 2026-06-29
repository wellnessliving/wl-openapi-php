<?php

namespace WlSdk\Thoth\ReportCore\Generator;

class QueryPostResponseDynamic
{
    /**
     * Fields of the complex cell.
     *
     * This field is filled by result of the ReportGeneratorCellAbstract::field() method.
     *
     * @var array[]|null
     */
    public ?array $a_cell = null;

    /**
     * Elements of a customization from that are required by this filter field.
     * Keys are names of required form elements; values are classes of this elements.
     *
     * @var array[]|null
     */
    public ?array $a_customization_element = null;

    /**
     * A list of scalar types of values that this field can get.
     *
     * Only scalar types are listed here.
     * Complex types is specified in `s_class`.
     *
     * Key is name of a scalar type. Value is always `true`.
     *
     * The following scalar types are possible:
     *
     * * `string`
     * * `int`
     * * `float`
     * * `bool`
     * * `array` (only allowed for values of ReportGeneratorCellAbstract, not for report
     *    fields.)
     *
     * Empty array if scalar types are not acceptable.
     * In this case `s_class` is specified.
     *
     * @var array|null
     */
    public ?array $a_type = null;

    /**
     * Whether this field is dynamic or static.
     *
     * `true` if this field is generated dynamically by
     * {@link \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}.
     *
     * `false` if this field corresponds to a property of a subclass of
     * ReportGeneratorRowAbstract or
     * ReportGeneratorCellAbstract.
     *
     * @var bool|null
     */
    public ?bool $is_dynamic = null;

    /**
     * Whether this field is used for export.
     *
     * `true` if this field is used for export.
     *
     * `false` if this field is only used for rendering of the report.
     *
     * Fields that should be exported are marked wih &#64;`export-yes` tag.
     * Fields that should not be exported are marked with &#64;`export-no` tag.
     *
     * `null` until filled in by ReportGeneratorRowAbstract::field() or ReportGeneratorCellAbstract::field().
     *
     * @var bool|null
     */
    public ?bool $is_export = null;

    /**
     * Whether this field should be hidden by default. It can later be shown by using the customization form.
     *
     * `true` if this field should be hidden by default.
     *
     * `false` if this field should be shown by default.
     *
     * @var bool|null
     */
    public ?bool $is_hide_by_default = null;

    /**
     * Whether this field should be hidden if the entire column is empty.
     *
     * <b>Note: Currently only implemented in the export. If you need this to affect the HTML report, you will need
     * to
     * implement that!</b>
     *
     * `true` if this field should be hidden if the entire column is empty.
     * `false` if this field should be shown if the entire column is empty.
     *
     * @var bool|null
     */
    public ?bool $is_hide_if_empty = null;

    /**
     * Whether this field is nullable.
     *
     * `true` if `null` is an allowed value for this field.
     *
     * `false` if `null` is not allowed.
     *
     * @var bool|null
     */
    public ?bool $is_null = null;

    /**
     * Whether the ordering by this field is available.
     *
     * `null` means that value is not initialized.
     * Initialized automatically in ReportGeneratorRowAbstract::field().
     * For dynamic fields should be set manually.
     *
     * @var bool|null
     */
    public ?bool $is_order = null;

    /**
     * Whether this field should be shown during report render.
     *
     * `true` if this field should be shown during report render.
     *
     * `false` if this field should not be shown during report render.
     *
     * By default, all fields are shown.
     * To not to show a field, it should be marked with &#64;`show-no` tag.
     *
     * @var bool|null
     */
    public ?bool $is_show = null;

    /**
     * Whether this field is stored in the report storage.
     *
     * `true` if this field is stored in the report storage.
     * In this case its value should be loaded in {@link
     * \WlSdk\Thoth\ReportCore\Generator\ReportGeneratorReportAbstract}.
     *
     * `false` if this field should not be stored in the report storage.
     * In this case its value is loaded in ReportGeneratorRowAbstract::load().
     *
     * By default, all fields are stored.
     * To not to store a field, it should be marked with &#64;`store-no` tag.
     *
     * @var bool|null
     */
    public ?bool $is_store = null;

    /**
     * Argument for the MySQL function `cast()`.
     *
     * Allows treating value of the field as certain type, which is required for proper ordering.
     * For example, keys can be string and can be numbers.
     * If key is a number, it should have cast value as `unsigned`.
     * If key is a string, cast can be left null, because string will be used by default.
     *
     * `null` value should be determined based on the prefix.
     *
     * @var string|null
     */
    public ?string $s_cast = null;

    /**
     * Name of a subclass of ReportGeneratorCellAbstract which objects can be used as a value
     * for this report field.
     *
     * `null` if complex types are not acceptable (in this case
     * `a_type` is not empty).
     *
     * @var array|null
     */
    public ?array $s_class = null;

    /**
     * CSS class that is used for formatting of this field.
     * This class will be added to the column header.
     *
     * @var string|null
     */
    public ?string $s_class_css = null;

    /**
     * Name of formatting method that is used for formatting of this field during export.
     *
     * Formatting method may not be provided if `s_class` is set.
     * In this case formatting methods may be specified for individual properties of that class.
     *
     * `null` if no additional formatting should be performed during export.
     *
     * See `namespace.Wl/Report/Generator/doc/report-export-format.md` for details.
     *
     * @var string|null
     */
    public ?string $s_format = null;

    /**
     * Name of a public property in which value of this field is stored.
     *
     * This value corresponds name of a public property in a subclass of
     * ReportGeneratorRowAbstract.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * A string by which report columns are sorted.
     *
     * Sorting is only considered for report fields, but not for fields of a report cell.
     *
     * It is a strong requirement that sorting values be unique among all static and all dynamic fields of a
     * report.
     * This is due to that this sorting influences indexes under which data is stored in
     * ReportStorageContentSql.`json_row`.
     * Having different order leads to that all indexes are changed.
     *
     * @var string|null
     */
    public ?string $s_sort = null;

    /**
     * Type of this field, as specified in its PHP doc.
     *
     * Copy of value of &#64;`var` tag of the field.
     *
     * This value may not be specified for dynamic columns.
     *
     * @var string|null
     */
    public ?string $s_type = null;

    /**
     * Data to derive title of a column which values are represented by this report field.
     *
     * Do not use this property to get title of the column.
     * This column does not contain title of a column. It only contains data based on which title should be
     * derived.
     * Use ReportGeneratorFieldInfo::titleText() to get title of the column.
     *
     * If `is_dynamic` is `true`, this property contains a string
     * that should be directly shown to the user. Otherwise, this property contains a part of the source of a
     * translated
     * message.
     *
     * Copy of &#64;`title` tag of the field.
     *
     * If &#64;`title` tag is not specified,
     * ReportGeneratorCellAbstract::TITLE is used.
     * If that constant is not set also, source for translated message is generated based on
     * `s_name`.
     *
     * For dynamic columns, it is required that this title be set.
     * In this case this is not a source for a translated message.
     *
     * `null` for cell properties, because cells properties are not shown as individual columns in the report.
     * `null` is also set if this field has `is_show` set to `false`.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Title of this field that is used during export.
     *
     * Copy of &#64;`title-export` tag.
     * If &#64;`title-export` tag is not provided, this property contains copy of
     * `text_title`.
     *
     * For report cells, if &#64;`title-export` tag is not set, source for translated message for this property is
     * based
     * on concatenation of `s_name` for report row field and report
     * cell field.
     *
     * `null` if this field has `is_export` set to `false`.
     *
     * @var string|null
     */
    public ?string $text_title_export = null;

    /**
     * Text of the cell info tooltip.
     *
     * @var string|null
     */
    public ?string $text_title_info = null;

    public function __construct(array $data)
    {
        $this->a_cell = isset($data['a_cell']) ? (array)$data['a_cell'] : null;
        $this->a_customization_element = isset($data['a_customization_element']) ? (array)$data['a_customization_element'] : null;
        $this->a_type = isset($data['a_type']) ? (array)$data['a_type'] : null;
        $this->is_dynamic = isset($data['is_dynamic']) ? (bool)$data['is_dynamic'] : null;
        $this->is_export = isset($data['is_export']) ? (bool)$data['is_export'] : null;
        $this->is_hide_by_default = isset($data['is_hide_by_default']) ? (bool)$data['is_hide_by_default'] : null;
        $this->is_hide_if_empty = isset($data['is_hide_if_empty']) ? (bool)$data['is_hide_if_empty'] : null;
        $this->is_null = isset($data['is_null']) ? (bool)$data['is_null'] : null;
        $this->is_order = isset($data['is_order']) ? (bool)$data['is_order'] : null;
        $this->is_show = isset($data['is_show']) ? (bool)$data['is_show'] : null;
        $this->is_store = isset($data['is_store']) ? (bool)$data['is_store'] : null;
        $this->s_cast = isset($data['s_cast']) ? (string)$data['s_cast'] : null;
        $this->s_class = isset($data['s_class']) ? (array)$data['s_class'] : null;
        $this->s_class_css = isset($data['s_class_css']) ? (string)$data['s_class_css'] : null;
        $this->s_format = isset($data['s_format']) ? (string)$data['s_format'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->s_sort = isset($data['s_sort']) ? (string)$data['s_sort'] : null;
        $this->s_type = isset($data['s_type']) ? (string)$data['s_type'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->text_title_export = isset($data['text_title_export']) ? (string)$data['text_title_export'] : null;
        $this->text_title_info = isset($data['text_title_info']) ? (string)$data['text_title_info'] : null;
    }
}
