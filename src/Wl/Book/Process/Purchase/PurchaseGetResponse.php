<?php
namespace WlSdk\Wl\Book\Process\Purchase;

/**
 * Response from GET
 */
class PurchaseGetResponse
{
    /**
     * Data about the login prize which can be used to pay for service.
     *
     * @var PurchaseGetResponseLoginPrize|null
     */
    public ?PurchaseGetResponseLoginPrize $a_login_prize = null;

    /**
     * A list of the client's login promotions that can be applied to a given service.
     * Each element has the following fields:
     *
     * @var PurchaseGetResponseLoginPromotion[]|null
     */
    public ?array $a_login_promotion = null;

    /**
     * A list of Purchase Options that are available for the session(s) being booked. Keys refer to unique string
     * IDs,
     * and values refer arrays with the next fields:
     *
     * @var PurchaseGetResponsePurchase[]|null
     */
    public ?array $a_purchase = null;

    /**
     * List of redeemable prizes which can be used to pay for service.
     * Each element has the following fields:
     *
     * @var PurchaseGetResponseRewardPrize[]|null
     */
    public ?array $a_reward_prize = null;

    /**
     * The list of session passes that might be used in booking process.
     * Each element has the following fields:
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
        $this->a_login_prize = isset($data['a_login_prize']) ? new PurchaseGetResponseLoginPrize((array)$data['a_login_prize']) : null;
        $this->a_login_promotion = isset($data['a_login_promotion']) ? array_map(static fn($item) => new PurchaseGetResponseLoginPromotion((array)$item), (array)$data['a_login_promotion']) : null;
        $this->a_purchase = isset($data['a_purchase']) ? array_map(static fn($item) => new PurchaseGetResponsePurchase((array)$item), (array)$data['a_purchase']) : null;
        $this->a_reward_prize = isset($data['a_reward_prize']) ? array_map(static fn($item) => new PurchaseGetResponseRewardPrize((array)$item), (array)$data['a_reward_prize']) : null;
        $this->a_session_pass = isset($data['a_session_pass']) ? array_map(static fn($item) => new PurchaseGetResponseSessionPass((array)$item), (array)$data['a_session_pass']) : null;
        $this->is_single_default = isset($data['is_single_default']) ? (bool)$data['is_single_default'] : null;
        $this->k_promotion_default = isset($data['k_promotion_default']) ? (string)$data['k_promotion_default'] : null;
    }
}
