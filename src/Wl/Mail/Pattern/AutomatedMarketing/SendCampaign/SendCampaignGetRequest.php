<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\SendCampaign;

class SendCampaignGetRequest
{
    /**
     * Whether to run access check only.
     * If `true` - only verify access permissions. By default - `false`.
     *
     * @var bool|null
     */
    public ?bool $is_check_access = null;

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
            'is_check_access' => $this->is_check_access,
            'k_business' => $this->k_business,
            'k_mail_pattern_live' => $this->k_mail_pattern_live,
            ],
            static fn ($v) => $v !== null
        );
    }
}
