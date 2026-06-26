<?php

namespace WlSdk\Wl\Service\Promotion;

class ServicePromotionGetRequest
{
    /**
     * The key of the business. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Service key. Primary key in RsServiceSql table.
     *  The service with which you want to connect the promotions. `null` or `0` if you need to return a list
     *  of promotions for an uncreated service.
     *
     * @var string|null
     */
    public ?string $k_service = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_service' => $this->k_service,
            ],
            static fn ($v) => $v !== null
        );
    }
}
