<?php

namespace WlSdk\Wl\Marketing\Automation\List;

/**
 * Response from GET
 */
class AutomationListGetResponse
{
    /**
     * List of automations.
     * This list matches all filters.
     *
     * @var array|null
     */
    public ?array $a_automation_list = null;

    /**
     * Pagination data.
     *
     * @var array|null
     */
    public ?array $a_page = null;

    /**
     * Number of active automations.
     * This number contains the number of all active automations that match all filters except
     * `id_status` filter, so it may be greater than the number of items in
     * `a_automation_list`.
     *
     * @var int|null
     */
    public ?int $i_automation_active = null;

    /**
     * Number of draft automations.
     * This number contains the number of all draft automations that match all filters except
     * `id_status` filter, so it may be greater than the number of items in
     * `a_automation_list`.
     *
     * @var int|null
     */
    public ?int $i_automation_draft = null;

    /**
     * Total number of automations.
     * This number contains the number of all automations that match all filters except
     * `id_status` filter, so it may be greater than the number of items in
     * `a_automation_list`.
     *
     * @var int|null
     */
    public ?int $i_automation_total = null;

    public function __construct(array $data)
    {
        $this->a_automation_list = isset($data['a_automation_list']) ? (array)$data['a_automation_list'] : null;
        $this->a_page = isset($data['a_page']) ? (array)$data['a_page'] : null;
        $this->i_automation_active = isset($data['i_automation_active']) ? (int)$data['i_automation_active'] : null;
        $this->i_automation_draft = isset($data['i_automation_draft']) ? (int)$data['i_automation_draft'] : null;
        $this->i_automation_total = isset($data['i_automation_total']) ? (int)$data['i_automation_total'] : null;
    }
}
