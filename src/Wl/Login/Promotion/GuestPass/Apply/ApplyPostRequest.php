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
     * The source of the visit change.
     * One of the {@link \WlSdk\Wl\Mode\ModeSid} constants.
     * If you're unsure about the value to use, keep the default value `null`: the source is detected
     * automatically.
     *
     * @var int|null
     * @see \WlSdk\Wl\Mode\ModeSid
     */
    public ?int $id_mode = null;

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
            'id_mode' => $this->id_mode,
            'k_login_promotion' => $this->k_login_promotion,
            'k_visit' => $this->k_visit,
            ],
            static fn ($v) => $v !== null
        );
    }
}
