<?php
namespace WlSdk\Wl\Login\Promotion\GuestPass\Apply;

class ApplyPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Login promotion key of the host member's class membership whose guest pass
     * balance will be used.
     *
     * @var string|null
     */
    public ?string $k_login_promotion = null;

    /**
     * Visit key of the attendee to whom the guest pass is applied.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_login_promotion' => $this->k_login_promotion,
            'k_visit' => $this->k_visit,
            ],
            static fn($v) => $v !== null
        );
    }
}
