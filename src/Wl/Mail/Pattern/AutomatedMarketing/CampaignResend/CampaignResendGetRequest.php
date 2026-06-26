<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CampaignResend;

class CampaignResendGetRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Mail pattern live key.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern_live = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_mail_pattern_live' => $this->k_mail_pattern_live,
            ],
            static fn ($v) => $v !== null
        );
    }
}
