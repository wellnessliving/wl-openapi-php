<?php
namespace WlSdk\Wl\Promotion;

class PromotionGetResponsePromotionAccessService
{
    /**
     * Key of the appointment type.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    public function __construct(array $data)
    {
        $this->k_service = isset($data['k_service']) ? (string)$data['k_service'] : null;
    }
}
