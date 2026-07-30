<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListPostResponseTotalDiscountList
{
    /**
     * The number of clients that get this discount.
     *
     * @var int|null
     */
    public ?int $i_user = null;

    /**
     * The client type that gives the discount.
     *
     * @var string|null
     */
    public ?string $k_login_type = null;

    /**
     * The discount this client type gives, summed over all its clients and all the selected items.
     *
     * @var string|null
     */
    public ?string $m_discount = null;

    /**
     * The client type title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->i_user = isset($data['i_user']) ? (int)$data['i_user'] : null;
        $this->k_login_type = isset($data['k_login_type']) ? (string)$data['k_login_type'] : null;
        $this->m_discount = isset($data['m_discount']) ? (string)$data['m_discount'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
