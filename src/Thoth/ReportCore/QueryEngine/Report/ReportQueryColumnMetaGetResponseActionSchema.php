<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Report;

class ReportQueryColumnMetaGetResponseActionSchema
{
    /**
     * Map of action parameter name to SELECT alias used to extract the value from the row.
     *
     * @var array|null
     */
    public ?array $a_key_map = null;

    /**
     * `true` if a confirmation modal must appear before executing the action.
     *
     * @var bool|null
     */
    public ?bool $is_confirm = null;

    /**
     * Registered action name (matches {@link
     * \WlSdk\Thoth\ReportCore\QueryEngine\Action\QueryEngineActionAbstract}).
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * Human-readable menu item label shown in the row menu.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * API endpoint URL for `api`-type actions. Empty string for `link` actions.
     *
     * @var string|null
     */
    public ?string $s_url_api = null;

    /**
     * URL template with `{param}` placeholders for `link`-type actions. Empty string for `api` actions.
     *
     * @var string|null
     */
    public ?string $s_url_template = null;

    public function __construct(array $data)
    {
        $this->a_key_map = isset($data['a_key_map']) ? (array)$data['a_key_map'] : null;
        $this->is_confirm = isset($data['is_confirm']) ? (bool)$data['is_confirm'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->s_url_api = isset($data['s_url_api']) ? (string)$data['s_url_api'] : null;
        $this->s_url_template = isset($data['s_url_template']) ? (string)$data['s_url_template'] : null;
    }
}
