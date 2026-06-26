<?php

namespace WlSdk\Wl\Postcard\Campaign\CampaignEdit;

/**
 * Response from GET
 */
class CampaignEditTemplateGetResponse
{
    /**
     * Back image.
     *
     * @var string|null
     */
    public ?string $url_back = null;

    /**
     * Front image.
     *
     * @var string|null
     */
    public ?string $url_front = null;

    public function __construct(array $data)
    {
        $this->url_back = isset($data['url_back']) ? (string)$data['url_back'] : null;
        $this->url_front = isset($data['url_front']) ? (string)$data['url_front'] : null;
    }
}
