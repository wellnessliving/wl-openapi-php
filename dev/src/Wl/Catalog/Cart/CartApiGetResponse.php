<?php
namespace WlSdk\Wl\Catalog\Cart;

/**
 * Response from GET
 */
class CartApiGetResponse
{
    /**
     * The list of discounts for each item.
     * 
     * Keys refer to unique item keys, and values refer to discount amounts for the item.
     *
     * @var string[]|null
     */
    public ?array $a_discount_item = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_item = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_prize_propose = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_reward_item = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_reward_propose = null;

    /**
     * Values derived for individual tax rates.
     * 
     * Keys refer to tax keys, values refer to the amount of tax in the cart.
     *
     * @var string[]|null
     */
    public ?array $a_tax_list = null;

    /**
     * Amount of client's reward points.
     *
     * @var int|null
     */
    public ?int $i_score = null;

    /**
     * The full discount of the cart.
     * 
     * If `null`, the discount isn't calculated yet.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * The total discount amount.
     *
     * @var string|null
     */
    public ?string $m_discount_total = null;

    /**
     * The total amount in the catalog cart without tax.
     * 
     * If `null`, the total amount isn't set yet.
     *
     * @var string|null
     */
    public ?string $m_subtotal = null;

    /**
     * The tax amount.
     * 
     * If `null`, the tax amount isn't set yet.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    /**
     * The amount of appointment tips.
     *
     * @var string|null
     */
    public ?string $m_tip_purchase = null;

    /**
     * The total amount in the catalog cart.
     * 
     * If `null`, the total amount isn't set yet.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    public function __construct(array $data)
    {
        $this->a_discount_item = isset($data['a_discount_item']) ? (array)$data['a_discount_item'] : null;
        $this->a_item = isset($data['a_item']) ? (array)$data['a_item'] : null;
        $this->a_prize_propose = isset($data['a_prize_propose']) ? (array)$data['a_prize_propose'] : null;
        $this->a_reward_item = isset($data['a_reward_item']) ? (array)$data['a_reward_item'] : null;
        $this->a_reward_propose = isset($data['a_reward_propose']) ? (array)$data['a_reward_propose'] : null;
        $this->a_tax_list = isset($data['a_tax_list']) ? (array)$data['a_tax_list'] : null;
        $this->i_score = isset($data['i_score']) ? (int)$data['i_score'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_discount_total = isset($data['m_discount_total']) ? (string)$data['m_discount_total'] : null;
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_tip_purchase = isset($data['m_tip_purchase']) ? (string)$data['m_tip_purchase'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
    }
}
