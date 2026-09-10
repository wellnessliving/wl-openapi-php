<?php

namespace WlSdk\Wl\Visit\Blame;

/**
 * Response from GET
 */
class CheckGetResponse
{
    /**
     * Amount to be charged to the user.
     *
     * `null` if specified visit is not the blame, according business late cancel and no shows rules.
     *
     * @var string|null
     */
    public ?string $html_fee_amount = null;

    /**
     * Blame status of the visit.
     *
     * `true` if specified visit, according business late cancel and no shows rules, is blamed.
     *
     * @var bool|null
     */
    public ?bool $is_blame = null;

    /**
     * Whether display the confirmation modal.
     *
     * `true` the confirmation modal must be shown if specified visit, according business late cancel
     * and no shows rules, is blamed and the current user has the privilege to decide whether to charge a penalty
     * or not.
     * `false` - do not show the confirmation modal.
     *
     * @var bool|null
     */
    public ?bool $show_confirm = null;

    public function __construct(array $data)
    {
        $this->html_fee_amount = isset($data['html_fee_amount']) ? (string)$data['html_fee_amount'] : null;
        $this->is_blame = isset($data['is_blame']) ? (bool)$data['is_blame'] : null;
        $this->show_confirm = isset($data['show_confirm']) ? (bool)$data['show_confirm'] : null;
    }
}
