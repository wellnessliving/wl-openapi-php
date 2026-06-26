<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CampaignResend;

/**
 * Response from GET
 */
class CampaignResendGetResponse
{
    /**
     * The mail pattern live data of the original sent campaign.
     * An array with the following structure:
     *
     * @var CampaignResendGetResponseMailPatternLive|null
     */
    public ?CampaignResendGetResponseMailPatternLive $a_mail_pattern_live = null;

    public function __construct(array $data)
    {
        $this->a_mail_pattern_live = isset($data['a_mail_pattern_live']) ? new CampaignResendGetResponseMailPatternLive((array)$data['a_mail_pattern_live']) : null;
    }
}
