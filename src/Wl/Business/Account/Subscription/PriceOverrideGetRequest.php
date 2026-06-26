<?php

namespace WlSdk\Wl\Business\Account\Subscription;

class PriceOverrideGetRequest
{
    /**
     * Subscription statuses.
     *
     * @var int|null
     */
    public ?int $cid_subscription = null;

    /**
     * Periodicity of payments.
     *
     * @var int|null
     */
    public ?int $id_periodicity = null;

    /**
     * Plan ID.
     *
     * @var int|null
     */
    public ?int $id_plan = null;

    /**
     * Business key from RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_subscription' => $this->cid_subscription,
            'id_periodicity' => $this->id_periodicity,
            'id_plan' => $this->id_plan,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
