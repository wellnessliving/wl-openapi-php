<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCart;

/**
 * Response from GET
 */
class CatalogCartGetResponse
{
    /**
     * A list of available discount codes with the next structure:
     *
     * @var CatalogCartGetResponseDiscountCode|null
     */
    public ?CatalogCartGetResponseDiscountCode $a_discount_code = null;

    /**
     * The list of cart items with the next structure:
     *
     * @var CatalogCartGetResponseItem[]|null
     */
    public ?array $a_item = null;

    /**
     * Determines whether the business applied a commission at checkout.
     *
     * @var bool|null
     */
    public ?bool $is_commission = null;

    /**
     * Determines, how staff sees discount codes in Store.
     * `true` as select field, `false` as input field.
     *
     * @var bool|null
     */
    public ?bool $is_discount_code_mode_select = null;

    /**
     * Determines whether to display custom receipt notes at checkout.
     *
     * @var bool|null
     */
    public ?bool $is_receipt_note = null;

    /**
     * The amount that has to be charged right now for the cart.
     *
     * Equals {@link \WlSdk\Wl\Catalog\StaffApp\CatalogCart\CatalogCartGetResponse::$m_total} for everything that
     * is paid for in full at once. A
     * tuition defers a part of its cost to an installment plan or to a membership schedule, and
     * `m_total` covers the full cost regardless, so this is the amount to put into the payment form.
     * It is `m_total` minus `a_config.m_deferred` of every tuition item in
     * {@link \WlSdk\Wl\Catalog\StaffApp\CatalogCart\CatalogCartGetResponse::$a_item}.
     *
     * @var string|null
     */
    public ?string $m_checkout = null;

    /**
     * The subtotal amount that has to be charged right now for the cart, before discount.
     *
     * Equals {@link \WlSdk\Wl\Catalog\StaffApp\CatalogCart\CatalogCartGetResponse::$m_subtotal} for everything
     * that is paid for in full at once. See
     * {@link \WlSdk\Wl\Catalog\StaffApp\CatalogCart\CatalogCartGetResponse::$m_checkout} for how a tuition's
     * deferred cost is excluded.
     *
     * @var string|null
     */
    public ?string $m_checkout_before_discount = null;

    /**
     * The amount that has to be charged right now for the cart, after discount but before tax.
     *
     * Equals {@link \WlSdk\Wl\Catalog\StaffApp\CatalogCart\CatalogCartGetResponse::$m_checkout_before_discount}
     * minus
     * {@link \WlSdk\Wl\Catalog\StaffApp\CatalogCart\CatalogCartGetResponse::$m_checkout_discount}.
     *
     * @var string|null
     */
    public ?string $m_checkout_before_tax = null;

    /**
     * The discount amount that applies to the part of the cart charged right now, excluding tax.
     *
     * Equals {@link \WlSdk\Wl\Catalog\StaffApp\CatalogCart\CatalogCartGetResponse::$m_discount_total} for
     * everything that is paid for in full at once. See
     * {@link \WlSdk\Wl\Catalog\StaffApp\CatalogCart\CatalogCartGetResponse::$m_checkout} for how a tuition's
     * deferred cost is excluded.
     *
     * @var string|null
     */
    public ?string $m_checkout_discount = null;

    /**
     * The amount of tax that applies to the part of the cart charged right now.
     *
     * Equals {@link \WlSdk\Wl\Catalog\StaffApp\CatalogCart\CatalogCartGetResponse::$m_tax} for everything that is
     * paid for in full at once. See
     * {@link \WlSdk\Wl\Catalog\StaffApp\CatalogCart\CatalogCartGetResponse::$m_checkout} for how a tuition's
     * deferred cost is excluded.
     *
     * @var string|null
     */
    public ?string $m_checkout_tax = null;

    /**
     * The discount amount in dollars, excluding tax.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * The discount amount applied to the cart's total amount, including taxes.
     *
     * @var string|null
     */
    public ?string $m_discount_total = null;

    /**
     * The subtotal amount.
     *
     * @var string|null
     */
    public ?string $m_subtotal = null;

    /**
     * The amount of tax.
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
     * The cart's total amount.
     *
     * @var string|null
     */
    public ?string $m_total = null;

    /**
     * The discount code's error code.
     *
     * `null` if no error.
     *
     * @var string|null
     */
    public ?string $text_error_code = null;

    /**
     * The discount code's error message.
     *
     * `null` if no error.
     *
     * @var string|null
     */
    public ?string $text_error_message = null;

    /**
     * The custom receipt note's text.
     *
     * @var string|null
     */
    public ?string $text_receipt_note = null;

    public function __construct(array $data)
    {
        $this->a_discount_code = isset($data['a_discount_code']) ? new CatalogCartGetResponseDiscountCode((array)$data['a_discount_code']) : null;
        $this->a_item = isset($data['a_item']) ? array_map(static fn ($item) => new CatalogCartGetResponseItem((array)$item), (array)$data['a_item']) : null;
        $this->is_commission = isset($data['is_commission']) ? (bool)$data['is_commission'] : null;
        $this->is_discount_code_mode_select = isset($data['is_discount_code_mode_select']) ? (bool)$data['is_discount_code_mode_select'] : null;
        $this->is_receipt_note = isset($data['is_receipt_note']) ? (bool)$data['is_receipt_note'] : null;
        $this->m_checkout = isset($data['m_checkout']) ? (string)$data['m_checkout'] : null;
        $this->m_checkout_before_discount = isset($data['m_checkout_before_discount']) ? (string)$data['m_checkout_before_discount'] : null;
        $this->m_checkout_before_tax = isset($data['m_checkout_before_tax']) ? (string)$data['m_checkout_before_tax'] : null;
        $this->m_checkout_discount = isset($data['m_checkout_discount']) ? (string)$data['m_checkout_discount'] : null;
        $this->m_checkout_tax = isset($data['m_checkout_tax']) ? (string)$data['m_checkout_tax'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->m_discount_total = isset($data['m_discount_total']) ? (string)$data['m_discount_total'] : null;
        $this->m_subtotal = isset($data['m_subtotal']) ? (string)$data['m_subtotal'] : null;
        $this->m_tax = isset($data['m_tax']) ? (string)$data['m_tax'] : null;
        $this->m_tip_purchase = isset($data['m_tip_purchase']) ? (string)$data['m_tip_purchase'] : null;
        $this->m_total = isset($data['m_total']) ? (string)$data['m_total'] : null;
        $this->text_error_code = isset($data['text_error_code']) ? (string)$data['text_error_code'] : null;
        $this->text_error_message = isset($data['text_error_message']) ? (string)$data['text_error_message'] : null;
        $this->text_receipt_note = isset($data['text_receipt_note']) ? (string)$data['text_receipt_note'] : null;
    }
}
