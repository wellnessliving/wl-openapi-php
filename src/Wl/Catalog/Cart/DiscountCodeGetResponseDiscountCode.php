<?php

namespace WlSdk\Wl\Catalog\Cart;

class DiscountCodeGetResponseDiscountCode
{
    /**
     * Fixed amount of discount. For 1 unit of purchase item.
     *
     * @var string|null
     */
    public ?string $f_amount = null;

    /**
     * Discount size in percents.
     *
     * @var float|null
     */
    public ?float $f_percent = null;

    /**
     * Maximum count of usage. Zero means unlimited usage.
     *
     * @var int|null
     */
    public ?int $i_limit = null;

    /**
     * Discount code key. See Sql.
     *
     * @var string|null
     */
    public ?string $k_discount_code = null;

    /**
     * Discount code value.
     *
     * @var string|null
     */
    public ?string $s_discount_code = null;

    public function __construct(array $data)
    {
        $this->f_amount = isset($data['f_amount']) ? (string)$data['f_amount'] : null;
        $this->f_percent = isset($data['f_percent']) ? (float)$data['f_percent'] : null;
        $this->i_limit = isset($data['i_limit']) ? (int)$data['i_limit'] : null;
        $this->k_discount_code = isset($data['k_discount_code']) ? (string)$data['k_discount_code'] : null;
        $this->s_discount_code = isset($data['s_discount_code']) ? (string)$data['s_discount_code'] : null;
    }
}
