<?php
namespace WlSdk\Wl\Book\Process\Purchase;

/**
 * Response from GET
 */
class PurchaseGetResponse
{
    /**
     * No description.
     *
     * @var PurchaseGetResponseLoginPrize[]|null
     */
    public ?array $a_login_prize = null;

    /**
     * No description.
     *
     * @var PurchaseGetResponseLoginPromotion[]|null
     */
    public ?array $a_login_promotion = null;

    /**
     * No description.
     *
     * @var PurchaseGetResponsePurchase[]|null
     */
    public ?array $a_purchase = null;

    /**
     * No description.
     *
     * @var PurchaseGetResponseRewardPrize[]|null
     */
    public ?array $a_reward_prize = null;

    /**
     * No description.
     *
     * @var PurchaseGetResponseSessionPass[]|null
     */
    public ?array $a_session_pass = null;

    /**
     * Indicates if the drop-in rate should be the default promotion.
     *
     * @var bool|null
     */
    public ?bool $is_single_default = null;

    /**
     * The default Purchase Option key.
     * This will be empty if the class has no default Purchase Option.
     *
     * @var string|null
     */
    public ?string $k_promotion_default = null;

    public function __construct(array $data)
    {
        $this->a_login_prize = isset($data['a_login_prize']) ? array_map(static fn($item) => new PurchaseGetResponseLoginPrize((array)$item), (array)$data['a_login_prize']) : null;
        $this->a_login_promotion = isset($data['a_login_promotion']) ? array_map(static fn($item) => new PurchaseGetResponseLoginPromotion((array)$item), (array)$data['a_login_promotion']) : null;
        $this->a_purchase = isset($data['a_purchase']) ? array_map(static fn($item) => new PurchaseGetResponsePurchase((array)$item), (array)$data['a_purchase']) : null;
        $this->a_reward_prize = isset($data['a_reward_prize']) ? array_map(static fn($item) => new PurchaseGetResponseRewardPrize((array)$item), (array)$data['a_reward_prize']) : null;
        $this->a_session_pass = isset($data['a_session_pass']) ? array_map(static fn($item) => new PurchaseGetResponseSessionPass((array)$item), (array)$data['a_session_pass']) : null;
        $this->is_single_default = isset($data['is_single_default']) ? (bool)$data['is_single_default'] : null;
        $this->k_promotion_default = isset($data['k_promotion_default']) ? (string)$data['k_promotion_default'] : null;
    }
}
