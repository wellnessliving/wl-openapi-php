<?php

namespace WlSdk\Thoth\ReportCore\Generator;

class QueryPostResponseDynamic
{
    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_cell = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_customization_element = null;

    /**
     * No description.
     *
     * @var array|null
     */
    public ?array $a_type = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_dynamic = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_export = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_hide_by_default = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_hide_if_empty = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_null = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_order = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_show = null;

    /**
     * No description.
     *
     * @var bool|null
     */
    public ?bool $is_store = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_cast = null;

    /**
     * No description.
     *
     * @var array|null
     */
    public ?array $s_class = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_class_css = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_format = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_sort = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $s_type = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * No description.
     *
     * @var string|null
     */
    public ?string $text_title_export = null;

    /**
     * No description.
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
