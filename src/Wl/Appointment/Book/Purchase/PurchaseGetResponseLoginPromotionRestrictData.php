<?php

namespace WlSdk\Wl\Appointment\Book\Purchase;

class PurchaseGetResponseLoginPromotionRestrictData
{
    /**
     * The count of future sessions that are paid with this Purchase Option.
     *
     * @var int|null
     */
    public ?int $i_book = null;

    /**
     * The limit of visits for the restriction period.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * The number of remaining visits for the restriction period.
     *
     * @var int|null
     */
    public ?int $i_remain = null;

    /**
     * The usage count of the Purchase Option.
     *
     * @var int|null
     */
    public ?int $i_use = null;

    /**
     * The count of attended sessions before the last renewal.
     * This will be '0' if no sessions before the last renewal or if the Purchase Option doesn't auto-renew.
     *
     * @var int|null
     */
    public ?int $i_visit_past = null;

    /**
     * The description of restriction period. For example, "this week" or "for a four-day period".
     *
     * @var string|null
     */
    public ?string $text_restriction = null;

    public function __construct(array $data)
    {
        $this->i_book = isset($data['i_book']) ? (int)$data['i_book'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->i_remain = isset($data['i_remain']) ? (int)$data['i_remain'] : null;
        $this->i_use = isset($data['i_use']) ? (int)$data['i_use'] : null;
        $this->i_visit_past = isset($data['i_visit_past']) ? (int)$data['i_visit_past'] : null;
        $this->text_restriction = isset($data['text_restriction']) ? (string)$data['text_restriction'] : null;
    }
}
