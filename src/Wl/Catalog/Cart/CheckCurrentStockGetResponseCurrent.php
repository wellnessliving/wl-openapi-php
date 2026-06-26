<?php

namespace WlSdk\Wl\Catalog\Cart;

class CheckCurrentStockGetResponseCurrent
{
    /**
     * Product's inventory count at current location.
     *
     * @var int|null
     */
    public ?int $i_current = null;

    /**
     * Product option key.
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * Product title.
     *
     * @var string|null
     */
    public ?string $html_title = null;

    public function __construct(array $data)
    {
        $this->i_current = isset($data['i_current']) ? (int)$data['i_current'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->html_title = isset($data['html_title']) ? (string)$data['html_title'] : null;
    }
}
