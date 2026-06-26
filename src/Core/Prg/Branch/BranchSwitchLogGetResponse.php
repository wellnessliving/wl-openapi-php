<?php

namespace WlSdk\Core\Prg\Branch;

/**
 * Response from GET
 */
class BranchSwitchLogGetResponse
{
    /**
     * Error logs on branch switching. Last `NUMBER_LINES` lines.
     *
     * @var string[]|null
     */
    public ?array $a_error_log = null;

    /**
     * Logs on branch switching. Last `NUMBER_LINES` lines.
     *
     * @var string[]|null
     */
    public ?array $a_log = null;

    /**
     * List of repositories that failed the last switch and could not be auto-repaired.
     * Each element has the same structure as a BranchRepairTool::statusRead() entry
     *  with BranchRepairTool::STATUS_ERROR status.
     * Empty array if all repositories are healthy.
     *
     * @var string[][]|null
     */
    public ?array $a_repair_status = null;

    /**
     * Whether the branch switching operation is complete and no more logs are generated.
     * `true` - switch done, `false` - the replacement of branches is still ongoing.
     *
     * @var bool|null
     */
    public ?bool $is_logging_done = null;

    /**
     * Whether branch switching is currently blocked due to unresolved repair errors from a previous switch.
     * `true` - blocked (at least one repository requires manual repair),
     * `false` - all repositories are healthy.
     *
     * @var bool|null
     */
    public ?bool $is_switch_blocked = null;

    public function __construct(array $data)
    {
        $this->a_error_log = isset($data['a_error_log']) ? (array)$data['a_error_log'] : null;
        $this->a_log = isset($data['a_log']) ? (array)$data['a_log'] : null;
        $this->a_repair_status = isset($data['a_repair_status']) ? (array)$data['a_repair_status'] : null;
        $this->is_logging_done = isset($data['is_logging_done']) ? (bool)$data['is_logging_done'] : null;
        $this->is_switch_blocked = isset($data['is_switch_blocked']) ? (bool)$data['is_switch_blocked'] : null;
    }
}
