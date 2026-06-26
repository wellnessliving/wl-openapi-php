<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\SendCampaign;

/**
 * Response from POST
 */
class SendCampaignPostResponse
{
    /**
     * Mail pattern live key.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern_live = null;

    public function __construct(array $data)
    {
        $this->k_mail_pattern_live = isset($data['k_mail_pattern_live']) ? (string)$data['k_mail_pattern_live'] : null;
    }
}
