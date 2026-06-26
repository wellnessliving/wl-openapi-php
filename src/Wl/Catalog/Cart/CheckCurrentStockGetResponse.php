<?php

namespace WlSdk\Wl\Catalog\Cart;

/**
 * Response from GET
 */
class CheckCurrentStockGetResponse
{
    /**
     * Current stock counts for products. Every element has next fields:
     *
     * @var CheckCurrentStockGetResponseCurrent|null
     */
    public ?CheckCurrentStockGetResponseCurrent $a_current = null;

    /**
     * `true` if user has access to the business, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $has_access = null;

    /**
     * `true` if show confirmation of negative current count, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $show_confirmation = null;

    public function __construct(array $data)
    {
        $this->a_current = isset($data['a_current']) ? new CheckCurrentStockGetResponseCurrent((array)$data['a_current']) : null;
        $this->has_access = isset($data['has_access']) ? (bool)$data['has_access'] : null;
        $this->show_confirmation = isset($data['show_confirmation']) ? (bool)$data['show_confirmation'] : null;
    }
}
