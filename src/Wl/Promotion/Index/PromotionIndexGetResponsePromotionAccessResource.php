<?php

namespace WlSdk\Wl\Promotion\Index;

class PromotionIndexGetResponsePromotionAccessResource
{
    /**
     * Key of the asset.
     *
     * @var string|null
     */
    public ?string $k_resource = null;

    public function __construct(array $data)
    {
        $this->k_resource = isset($data['k_resource']) ? (string)$data['k_resource'] : null;
    }
}
