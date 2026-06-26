<?php

namespace WlSdk\Thoth\MarketingCampaigns\Report\CampaignDetail;

class ClickTrackingGetResponseRowList
{
    /**
     * UIDs of clients who made clicks. Used to filter by unique clicks.
     *
     * @var array|null
     */
    public ?array $a_uid = null;

    /**
     * Unique clicks per email link.
     *
     * @var string|null
     */
    public ?string $i_click_unique = null;

    /**
     * Total clicks per email link.
     *
     * @var string|null
     */
    public ?string $i_click_total = null;

    /**
     * Click rate.
     *
     * @var string|null
     */
    public ?string $i_click_rate = null;

    /**
     * Clicked in an email link.
     *
     * @var string|null
     */
    public ?string $url_full = null;

    /**
     * link to Marketing detail report filtered by unique clicks.
     *
     * @var string|null
     */
    public ?string $url_click_unique = null;

    public function __construct(array $data)
    {
        $this->a_uid = isset($data['a_uid']) ? (array)$data['a_uid'] : null;
        $this->i_click_unique = isset($data['i_click_unique']) ? (string)$data['i_click_unique'] : null;
        $this->i_click_total = isset($data['i_click_total']) ? (string)$data['i_click_total'] : null;
        $this->i_click_rate = isset($data['i_click_rate']) ? (string)$data['i_click_rate'] : null;
        $this->url_full = isset($data['url_full']) ? (string)$data['url_full'] : null;
        $this->url_click_unique = isset($data['url_click_unique']) ? (string)$data['url_click_unique'] : null;
    }
}
