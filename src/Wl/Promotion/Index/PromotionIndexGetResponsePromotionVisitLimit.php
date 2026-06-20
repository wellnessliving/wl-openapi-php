<?php
namespace WlSdk\Wl\Promotion\Index;

class PromotionIndexGetResponsePromotionVisitLimit
{
    /**
     * The quantity of sessions every `i_period`.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The duration of the time period. This depends on a key of `a_visit_limit` array.
     *
     * @var int|null
     */
    public ?int $i_period = null;

    /**
     * The limit number of rollover sessions.
     *
     * @var int|null
     */
    public ?int $i_roll_over_cap = null;

    /**
     * The duration of the time period after which rolled over session will expire.
     *
     * @var int|null
     */
    public ?int $i_roll_over_expire = null;

    /**
     * The type of `i_roll_over_expire`.
     * One of {@link \WlSdk\ADurationSid} contantant.
     * This can only be: <ul>
     *     <li>{@link \WlSdk\ADurationSid}</li>
     *     <li>{@link \WlSdk\ADurationSid}</li>
     *     <li>{@link \WlSdk\ADurationSid}</li>
     *     <li>{@link \WlSdk\ADurationSid}</li>
     * </ul>
     *
     * @var \WlSdk\ADurationSid|null
     */
    public ?\WlSdk\ADurationSid $id_roll_over_expire = null;

    /**
     * The type of the limit cycle {@link \WlSdk\Wl\Promotion\Edit\Limit\Cycle\Sid}.
     *
     * @var \WlSdk\Wl\Promotion\Edit\Limit\Cycle\Sid|null
     */
    public ?\WlSdk\Wl\Promotion\Edit\Limit\Cycle\Sid $id_limit_cycle = null;

    /**
     * Determines whether to reconcile unpaid sessions on restrictions reset.
     *
     * @var bool|null
     */
    public ?bool $is_reconcile_visit = null;

    /**
     * Determines if the rolled over session is expired.
     *
     * @var bool|null
     */
    public ?bool $is_roll_over_expire = null;

    /**
     * Determines whether to rollover sessions upon auto-renew.
     *
     * @var bool|null
     */
    public ?bool $is_roll_over_renew = null;

    /**
     * Determines Whether to rollover sessions.
     *
     * @var bool|null
     */
    public ?bool $is_rollup = null;

    /**
     * Determines whether to convert remaining visits.
     *
     * @var bool|null
     */
    public ?bool $is_visit_conversion = null;

    public function __construct(array $data)
    {
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_period = isset($data['i_period']) ? (int)$data['i_period'] : null;
        $this->i_roll_over_cap = isset($data['i_roll_over_cap']) ? (int)$data['i_roll_over_cap'] : null;
        $this->i_roll_over_expire = isset($data['i_roll_over_expire']) ? (int)$data['i_roll_over_expire'] : null;
        $this->id_roll_over_expire = isset($data['id_roll_over_expire']) ? \WlSdk\ADurationSid::tryFrom((int)$data['id_roll_over_expire']) : null;
        $this->id_limit_cycle = isset($data['id_limit_cycle']) ? \WlSdk\Wl\Promotion\Edit\Limit\Cycle\Sid::tryFrom((int)$data['id_limit_cycle']) : null;
        $this->is_reconcile_visit = isset($data['is_reconcile_visit']) ? (bool)$data['is_reconcile_visit'] : null;
        $this->is_roll_over_expire = isset($data['is_roll_over_expire']) ? (bool)$data['is_roll_over_expire'] : null;
        $this->is_roll_over_renew = isset($data['is_roll_over_renew']) ? (bool)$data['is_roll_over_renew'] : null;
        $this->is_rollup = isset($data['is_rollup']) ? (bool)$data['is_rollup'] : null;
        $this->is_visit_conversion = isset($data['is_visit_conversion']) ? (bool)$data['is_visit_conversion'] : null;
    }
}
