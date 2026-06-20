<?php

namespace WlSdk\Wl\Appointment\Book\Purchase;

/**
 * Response from GET
 */
class Purchase72GetResponse
{
    /**
     * Data about the login prize which can be used to pay for service.
     *
     * @var Purchase72GetResponseLoginPrize|null
     */
    public ?Purchase72GetResponseLoginPrize $a_login_prize = null;

    /**
     * A list of the client's login promotions that can be applied to a given service.
     *
     * @var Purchase72GetResponseLoginPromotion[]|null
     */
    public ?array $a_login_promotion = null;

    /**
     * An array with information about available Purchase Options.
     *
     * @var Purchase72GetResponsePurchase[]|null
     */
    public ?array $a_purchase = null;

    /**
     * List of redeemable prizes which can be used to pay for service.
     *
     * @var Purchase72GetResponseRewardPrize|null
     */
    public ?Purchase72GetResponseRewardPrize $a_reward_prize = null;

    /**
     * Session pass information in a case if user books same appointment second time and already has Drop-in.
     *
     * @var Purchase72GetResponseSessionPass|null
     */
    public ?Purchase72GetResponseSessionPass $a_session_pass = null;

    /**
     * Indicates if drop-in rate should be the default purchase option.
     *
     * @var bool|null
     */
    public ?bool $is_single_default = null;

    /**
     * Location to show available appointment booking schedule.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * The Purchase Option ID used to pay for the appointment.
     * This will be `null` if the client doesn't have a suitable Purchase Option.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Default promotion key.
     * Empty if the appointment has no default promotion.
     *
     * @var string|null
     */
    public ?string $k_promotion_default = null;

    /**
     * Login promotion title suitable to pay for the services.
     *
     * @var string|null
     */
    public ?string $text_login_promotion = null;

    public function __construct(array $data)
    {
        $this->a_login_prize = isset($data['a_login_prize']) ? new Purchase72GetResponseLoginPrize((array)$data['a_login_prize']) : null;
        $this->a_login_promotion = isset($data['a_login_promotion']) ? array_map(static fn ($item) => new Purchase72GetResponseLoginPromotion((array)$item), (array)$data['a_login_promotion']) : null;
        $this->a_purchase = isset($data['a_purchase']) ? array_map(static fn ($item) => new Purchase72GetResponsePurchase((array)$item), (array)$data['a_purchase']) : null;
        $this->a_reward_prize = isset($data['a_reward_prize']) ? new Purchase72GetResponseRewardPrize((array)$data['a_reward_prize']) : null;
        $this->a_session_pass = isset($data['a_session_pass']) ? new Purchase72GetResponseSessionPass((array)$data['a_session_pass']) : null;
        $this->is_single_default = isset($data['is_single_default']) ? (bool)$data['is_single_default'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
        $this->k_login_promotion = isset($data['k_login_promotion']) ? (string)$data['k_login_promotion'] : null;
        $this->k_promotion_default = isset($data['k_promotion_default']) ? (string)$data['k_promotion_default'] : null;
        $this->text_login_promotion = isset($data['text_login_promotion']) ? (string)$data['text_login_promotion'] : null;
    }
}
