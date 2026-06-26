<?php

namespace WlSdk\Wl\Profile\PurchaseList\PaymentScheduleModal;

class PaymentScheduleElementGetRequest
{
    /**
     * Primary key in RsBusinessAr.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Primary key in RsLoginPromotionAr.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            ],
            static fn ($v) => $v !== null
        );
    }
}
