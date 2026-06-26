<?php

namespace WlSdk\Wl\Profile\Purchase;

class PurchaseItemCancelPostRequest
{
    /**
     * Business key specific purchase item belongs to.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Purchase item key which should be cancelled.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Purchase item key which should be cancelled.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * Session pass key if an event in a package is being cancelled.
     *
     * @var string|null
     */
    public ?string $k_session_pass_event_component = null;

    /**
     * User key of the purchase item owner.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Additional data.
     *
     * @var array|null
     */
    public ?array $a_data = null;

    /**
     * Whether cancellation should influence historical data.
     *
     * `true` to influence historical data.
     * `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_past = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'k_purchase_item' => $this->k_purchase_item,
            'k_session_pass_event_component' => $this->k_session_pass_event_component,
            'uid' => $this->uid,
            'a_data' => $this->a_data,
            'is_past' => $this->is_past,
            ],
            static fn ($v) => $v !== null
        );
    }
}
