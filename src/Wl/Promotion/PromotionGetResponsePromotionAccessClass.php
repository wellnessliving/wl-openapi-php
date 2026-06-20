<?php

namespace WlSdk\Wl\Promotion;

class PromotionGetResponsePromotionAccessClass
{
    /**
     * Key of the class.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    public function __construct(array $data)
    {
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
    }
}
