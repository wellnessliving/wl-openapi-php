<?php
namespace WlSdk\Wl\Book\Process\Purchase;

/**
 * Response from GET
 */
class Purchase56GetResponse
{
    /**
     * No description.
     *
     * @var Purchase56GetResponseLoginPrize[]|null
     */
    public ?array $a_login_prize = null;

    /**
     * No description.
     *
     * @var Purchase56GetResponseLoginPromotion[]|null
     */
    public ?array $a_login_promotion = null;

    /**
     * No description.
     *
     * @var Purchase56GetResponsePurchase[]|null
     */
    public ?array $a_purchase = null;

    /**
     * No description.
     *
     * @var Purchase56GetResponseRewardPrize[]|null
     */
    public ?array $a_reward_prize = null;

    /**
     * No description.
     *
     * @var Purchase56GetResponseSessionPass[]|null
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
        $this->a_login_prize = isset($data['a_login_prize']) ? array_map(static fn($item) => new Purchase56GetResponseLoginPrize((array)$item), (array)$data['a_login_prize']) : null;
        $this->a_login_promotion = isset($data['a_login_promotion']) ? array_map(static fn($item) => new Purchase56GetResponseLoginPromotion((array)$item), (array)$data['a_login_promotion']) : null;
        $this->a_purchase = isset($data['a_purchase']) ? array_map(static fn($item) => new Purchase56GetResponsePurchase((array)$item), (array)$data['a_purchase']) : null;
        $this->a_reward_prize = isset($data['a_reward_prize']) ? array_map(static fn($item) => new Purchase56GetResponseRewardPrize((array)$item), (array)$data['a_reward_prize']) : null;
        $this->a_session_pass = isset($data['a_session_pass']) ? array_map(static fn($item) => new Purchase56GetResponseSessionPass((array)$item), (array)$data['a_session_pass']) : null;
        $this->is_single_default = isset($data['is_single_default']) ? (bool)$data['is_single_default'] : null;
        $this->k_promotion_default = isset($data['k_promotion_default']) ? (string)$data['k_promotion_default'] : null;
    }
}
