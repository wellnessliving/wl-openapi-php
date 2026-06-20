<?php
namespace WlSdk\Wl\Promotion\Index;

class PromotionIndexGetResponsePromotionAccessEvent
{
    /**
     * Key of the event.
     *
     * @var string|null
     */
    public ?string $k_class = null;

    public function __construct(array $data)
    {
        $this->k_class = isset($data['k_class']) ? (string)$data['k_class'] : null;
    }
}
