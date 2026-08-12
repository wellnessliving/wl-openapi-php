<?php

namespace WlSdk\Wl\Book\Process\Purchase;

/**
 * Response from GET
 */
class PurchaseElementGetResponse
{
    /**
     * Additional configuration for the purchase item.
     * Depending on purchase item type different configuration parameters can be passed.
     *
     * For purchase items with {@link \WlSdk\RsPurchaseItemSid} type only `a_event_list` is
     * expected in the request, and only `k_class` and `uid` are accepted in every its entry. Prices,
     * discounts, and taxes can not be overridden here: this booking flow is never authenticated as a
     * staff member, so Tuition::verifyObjectFromSource() strips such fields.
     *
     * In the response this is not an echo: `a_event_list` comes back recomputed, and
     * `a_registration_fee_list`, `m_checkout`, and `m_deferred` are added.
     *
     * @var PurchaseElementGetResponseConfig|null
     */
    public ?PurchaseElementGetResponseConfig $a_config = null;

    /**
     * A list of taxes for the given purchase options.
     * Keys - tax keys, values - tax amounts.
     *
     * @var string[]|null
     */
    public ?array $a_tax = null;

    /**
     * The amount that has to be charged right now for the given purchase options.
     *
     * Equals {@link \WlSdk\Wl\Book\Process\Purchase\PurchaseElementGroupGetResponse::$m_cost} for everything that
     * is paid for in full at
     * once. A tuition defers a part of its cost to an installment plan or to a membership schedule,
     * and `m_cost` covers the full cost regardless, so this is the amount to put into the payment
     * form. It is `m_cost` minus `a_config.m_deferred` of every tuition item in
     * {@link \WlSdk\Wl\Book\Process\Purchase\PurchaseElementGroupGetResponse::$a_purchase_item}.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

    /**
     * The total cost of the given purchase options.
     *
     * For a tuition this is the full cost, including whatever is deferred to an installment plan or
     * to a membership schedule.
     *
     * @var string|null
     */
    public ?string $m_cost = null;

    /**
     * The amount of the whole discount for the given purchase options.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * The discount amount provided by a discount code for the given purchase options.
     *
     * @var string|null
     */
    public ?string $m_discount_code = null;

    /**
     * The discount amount for the client type for the given purchase options.
     *
     * @var string|null
     */
    public ?string $m_discount_login = null;

    /**
     * The price of the given purchase options (with or without taxes, depending on regional standards).
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * The amount of subtotal for the given purchase options.
     *
     * @var string|null
     */
    public ?string $m_subtotal = null;

    /**
     * The amount of taxes for the given purchase options.
     *
     * @var string|null
     */
    public ?string $m_tax = null;

    public function __construct(array $data)
    {
        $this->a_config = isset($data['a_config']) ? new PurchaseElementGetResponseConfig((array)$data['a_config']) : null;
        $this->a_tax = isset($data['a_tax']) ? (array)$data['a_tax'] : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->m_cost = isset($data['m_cost']) ? (string)$data['m_cost'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_discount_code = isset($data['m_discount_code']) ? (string)$data['m_discount_code'] : null;
        $this->m_discount_login = isset($data['m_discount_login']) ? (string)$data['m_discount_login'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
    }
}
