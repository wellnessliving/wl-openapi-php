<?php

namespace WlSdk\Wl\Login\Promotion\GuestPass\Apply;

/**
 * Response from GET
 */
class ApplyGetResponse
{
    /**
     * A list of login promotions with available guest passes for the given visit.
     *
     * Each element is an array with the following keys:
     *
     * @var ApplyGetResponseLoginPromotion[]|null
     */
    public ?array $a_login_promotion = null;

    public function __construct(array $data)
    {
        $this->a_login_promotion = isset($data['a_login_promotion']) ? array_map(static fn ($item) => new ApplyGetResponseLoginPromotion((array)$item), (array)$data['a_login_promotion']) : null;
    }
}
