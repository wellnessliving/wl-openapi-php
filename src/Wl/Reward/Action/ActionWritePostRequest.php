<?php
namespace WlSdk\Wl\Reward\Action;

class ActionWritePostRequest
{
    /**
     * Promotions' list.
     * 
     * `null` if not set yet.
     *
     * @var string[]|null
     */
    public ?array $a_promotion = null;

    /**
     * Maximum count of score.
     * 
     * `null` if not set yet.
     *
     * @var int|null
     */
    public ?int $i_cap = null;

    /**
     * Count of the duration period.
     * 
     * `null` if not set yet.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Score of the reward.
     * 
     * `null` if not set yet.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * Period to apply maximum count of score.
     * 
     * `null` if not set yet.
     *
     * @var int|null
     */
    public ?int $id_cap = null;

    /**
     * Type of a period.
     * 
     * `null` if not set yet.
     *
     * @var int|null
     */
    public ?int $id_duration = null;

    /**
     * Flag to define points type (account credits or points) in the 'Refer-a-Friend' section on the 'Enable
     * Points' page.
     * `true`, if these are account credits.
     * `false`, if these are points.
     * `null` if field left unchanged.
     *
     * @var bool|null
     */
    public ?bool $is_account_credit = null;

    /**
     * Whether auto-renewal is enabled for this reward action.
     *
     * @var bool|null
     */
    public ?bool $is_auto_renewal = null;

    /**
     * Business key.
     * 
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Class ID.
     * 
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    /**
     * Promotion key.
     * 
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_promotion = null;

    /**
     * Reward action ID.
     * 
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_reward_action = null;

    /**
     * Service key.
     * 
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    /**
     * Shop product ID.
     * 
     * `null` if not set yet.
     *
     * @var string|null
     */
    public ?string $k_shop_product = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_promotion' => $this->a_promotion,
            'i_cap' => $this->i_cap,
            'i_count' => $this->i_count,
            'i_score' => $this->i_score,
            'id_cap' => $this->id_cap,
            'id_duration' => $this->id_duration,
            'is_account_credit' => $this->is_account_credit,
            'is_auto_renewal' => $this->is_auto_renewal,
            'k_business' => $this->k_business,
            'k_class' => $this->k_class,
            'k_promotion' => $this->k_promotion,
            'k_reward_action' => $this->k_reward_action,
            'k_service' => $this->k_service,
            'k_shop_product' => $this->k_shop_product,
            ],
            static fn($v) => $v !== null
        );
    }
}
