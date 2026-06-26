<?php

namespace WlSdk\Thoth\WlPay\Refund;

class RefundGetResponsePurchaseItem
{
    /**
     * Array of applied taxes. Each item is an array:
     *
     * @var RefundGetResponsePurchaseItemTax|null
     */
    public ?RefundGetResponsePurchaseItemTax $a_tax = null;

    /**
     * `true` when quantity is 1 and can not be adjusted for refund.
     *
     * @var bool|null
     */
    public ?bool $can_change_count = null;

    /**
     * Purchase item price without taxes to refund.
     *
     * @var string|null
     */
    public ?string $f_pay_price_refund = null;

    /**
     * Deferred payment date or `null` if the payment task has already been completed or never existed.
     *
     * @var string|null
     */
    public ?string $html_date_suspend_pay = null;

    /**
     * Formatted purchase item price without taxes.
     *
     * @var string|null
     */
    public ?string $html_price = null;

    /**
     * Formatted purchase item price without taxes to refund.
     *
     * @var string|null
     */
    public ?string $html_price_refund = null;

    /**
     * Deferred payment amount or `null` if the payment task has already been completed or never existed.
     *
     * @var string|null
     */
    public ?string $html_suspend_pay = null;

    /**
     * Purchased item title.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    /**
     * Purchased item total amount.
     *
     * @var string|null
     */
    public ?string $html_total = null;

    /**
     * Number of items initially bought.
     *
     * @var int|null
     */
    public ?int $i_count = null;

    /**
     * Number of items that is not cancelled yet.
     *
     * @var int|null
     */
    public ?int $i_buy = null;

    /**
     * ID of the purchased item. One of {@link \WlSdk\RsPurchaseItemSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * `true` when a purchase item is completely refunded.
     *
     * @var bool|null
     */
    public ?bool $is_refund_full = null;

    /**
     * `true` when a purchase item is partially refunded.
     *
     * @var bool|null
     */
    public ?bool $is_refund_partial = null;

    /**
     * Purchase item key. Primary key in the RsPurchaseItemSql table.
     * `0` if the item is tips.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * Purchase item price without taxes.
     *
     * @var string|null
     */
    public ?string $m_price = null;

    /**
     * `true` when PO can be deactivated.
     *
     * @var bool|null
     */
    public ?bool $show_deactivate = null;

    /**
     * `true` when it can be reflected in payment schedule
     *
     * @var bool|null
     */
    public ?bool $show_reflect_schedule = null;

    /**
     * URL to page when purchase item can be edited.
     *
     * @var string|null
     */
    public ?string $url_edit = null;

    public function __construct(array $data)
    {
        $this->a_tax = isset($data['a_tax']) ? new RefundGetResponsePurchaseItemTax((array)$data['a_tax']) : null;
        $this->can_change_count = isset($data['can_change_count']) ? (bool)$data['can_change_count'] : null;
        $this->f_pay_price_refund = isset($data['f_pay_price_refund']) ? (string)$data['f_pay_price_refund'] : null;
        $this->html_date_suspend_pay = isset($data['html_date_suspend_pay']) ? (string)$data['html_date_suspend_pay'] : null;
        $this->html_price = isset($data['html_price']) ? (string)$data['html_price'] : null;
        $this->html_price_refund = isset($data['html_price_refund']) ? (string)$data['html_price_refund'] : null;
        $this->html_suspend_pay = isset($data['html_suspend_pay']) ? (string)$data['html_suspend_pay'] : null;
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
        $this->html_total = isset($data['html_total']) ? (string)$data['html_total'] : null;
        $this->i_count = isset($data['i_count']) ? (int)$data['i_count'] : null;
        $this->i_buy = isset($data['i_buy']) ? (int)$data['i_buy'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->is_refund_full = isset($data['is_refund_full']) ? (bool)$data['is_refund_full'] : null;
        $this->is_refund_partial = isset($data['is_refund_partial']) ? (bool)$data['is_refund_partial'] : null;
        $this->k_purchase_item = isset($data['k_purchase_item']) ? (string)$data['k_purchase_item'] : null;
        $this->m_price = isset($data['m_price']) ? (string)$data['m_price'] : null;
        $this->show_deactivate = isset($data['show_deactivate']) ? (bool)$data['show_deactivate'] : null;
        $this->show_reflect_schedule = isset($data['show_reflect_schedule']) ? (bool)$data['show_reflect_schedule'] : null;
        $this->url_edit = isset($data['url_edit']) ? (string)$data['url_edit'] : null;
    }
}
