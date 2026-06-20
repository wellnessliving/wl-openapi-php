<?php

namespace WlSdk\Wl\Login\Add;

class MailUseOkPostRequest
{
    /**
     * This value is `true` if this user is a lead. `false` if otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_lead = null;

    /**
     * The business key used internally by WellnessLiving.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The Lead Capture Widget skin key. This is used only if a lead was added.
     *
     * @var string|null
     */
    public ?string $k_skin = null;

    /**
     * The user key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_lead' => $this->is_lead,
            'k_business' => $this->k_business,
            'k_skin' => $this->k_skin,
            'uid' => $this->uid,
            ],
            static fn ($v) => $v !== null
        );
    }
}
