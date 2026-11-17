<?php

namespace WlSdk\Wl\Visit\Kiosk;

class SignSendPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the location of the kiosk.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * Key of the purchase item whose contract is sent: the `k_purchase_item` of a contract alert of the client
     * ({@link \WlSdk\Wl\Profile\Alert\AlertGetResponse::$a_alert}).
     *
     * `null` to send the waiver of the business.
     *
     * @var string|null
     */
    public ?string $k_purchase_item = null;

    /**
     * Key of the client.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_purchase_item' => $this->k_purchase_item,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
