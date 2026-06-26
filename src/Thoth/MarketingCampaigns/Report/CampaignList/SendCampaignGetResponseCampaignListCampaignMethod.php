<?php

namespace WlSdk\Thoth\MarketingCampaigns\Report\CampaignList;

class SendCampaignGetResponseCampaignListCampaignMethod
{
    /**
     * A method classes.
     *
     * @var string|null
     */
    public ?string $s_class = null;

    /**
     * Click method.
     *
     * @var string|null
     */
    public ?string $s_onclick = null;

    /**
     * Title of a method.
     *
     * @var string|null
     */
    public ?string $s_title = null;

    /**
     * URL link.
     *
     * @var string|null
     */
    public ?string $s_url = null;

    public function __construct(array $data)
    {
        $this->s_class = isset($data['s_class']) ? (string)$data['s_class'] : null;
        $this->s_onclick = isset($data['s_onclick']) ? (string)$data['s_onclick'] : null;
        $this->s_title = isset($data['s_title']) ? (string)$data['s_title'] : null;
        $this->s_url = isset($data['s_url']) ? (string)$data['s_url'] : null;
    }
}
