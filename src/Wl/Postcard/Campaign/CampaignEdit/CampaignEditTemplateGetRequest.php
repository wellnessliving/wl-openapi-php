<?php

namespace WlSdk\Wl\Postcard\Campaign\CampaignEdit;

class CampaignEditTemplateGetRequest
{
    /**
     * Postcard key.
     *
     * `null` if existing template not required.
     *
     * @var string|null
     */
    public ?string $k_postcard = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_postcard' => $this->k_postcard,
            ],
            static fn ($v) => $v !== null
        );
    }
}
