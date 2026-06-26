<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\SendCampaign;

class SendCampaignPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * A campaign data to save.
     * For structure details see SendCampaign::saveCampaign() method.
     *
     * @var string|null
     */
    public ?string $json_campaign_save = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'json_campaign_save' => $this->json_campaign_save,
            ],
            static fn ($v) => $v !== null
        );
    }
}
