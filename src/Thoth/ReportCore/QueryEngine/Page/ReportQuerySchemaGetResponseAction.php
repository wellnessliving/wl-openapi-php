<?php

namespace WlSdk\Thoth\ReportCore\QueryEngine\Page;

class ReportQuerySchemaGetResponseAction
{
    /**
     * Unique action name used in `json_actions` as `s_action`.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * Human-readable menu item label shown to the user.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * Required SELECT column aliases that must be present in the SQL query for this action.
     *
     * @var string[]|null
     */
    public ?array $a_key_names = null;

    /**
     * `true` if a confirmation modal must appear before executing the action.
     *
     * @var bool|null
     */
    public ?bool $is_confirm = null;

    /**
     * `'api'` for backend API call, or `'link'` for URL navigation.
     *
     * @var string|null
     */
    public ?string $s_action_type = null;

    /**
     * Plain-text usage hint describing the action and required SQL columns.
     *
     * @var string|null
     */
    public ?string $text_usage = null;

    public function __construct(array $data)
    {
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->a_key_names = isset($data['a_key_names']) ? (array)$data['a_key_names'] : null;
        $this->is_confirm = isset($data['is_confirm']) ? (bool)$data['is_confirm'] : null;
        $this->s_action_type = isset($data['s_action_type']) ? (string)$data['s_action_type'] : null;
        $this->text_usage = isset($data['text_usage']) ? (string)$data['text_usage'] : null;
    }
}
