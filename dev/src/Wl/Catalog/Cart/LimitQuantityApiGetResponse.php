<?php
namespace WlSdk\Wl\Catalog\Cart;

/**
 * Response from GET
 */
class LimitQuantityApiGetResponse
{
    /**
     * The quantity if promotions have already been purchased by the current user.
     * 
     * If `true`, the quantity exceeded. Otherwise, this will be `false`.
     * 
     * This will be `null` if not set yet, there's no limit quantity, or the limit quantity isn't exceeded.
     *
     * @var int|null
     */
    public ?int $i_purchase_already = null;

    /**
     * The current quantity of a promotion with the quantity limit in the cart.
     * 
     * This will be `null` if not set yet, there's no limit quantity, or the limit quantity isn't exceeded.
     *
     * @var int|null
     */
    public ?int $i_purchase_current = null;

    /**
     * The quantity limit of the promotion.
     * 
     * This will be `null` if not set yet or if there's no limit quantity.
     *
     * @var int|null
     */
    public ?int $i_quantity_limit = null;

    /**
     * Determines whether the limit quantity has been exceeded.
     * 
     * If `true`, the limit quantity has been exceeded. Otherwise, this will be `false`.
     * 
     * This will be `null` if not set yet.
     *
     * @var bool|null
     */
    public ?bool $is_limit_exceeded = null;

    public function __construct(array $data)
    {
        $this->i_purchase_already = isset($data['i_purchase_already']) ? (int)$data['i_purchase_already'] : null;
        $this->i_purchase_current = isset($data['i_purchase_current']) ? (int)$data['i_purchase_current'] : null;
        $this->i_quantity_limit = isset($data['i_quantity_limit']) ? (int)$data['i_quantity_limit'] : null;
        $this->is_limit_exceeded = isset($data['is_limit_exceeded']) ? (bool)$data['is_limit_exceeded'] : null;
    }
}
