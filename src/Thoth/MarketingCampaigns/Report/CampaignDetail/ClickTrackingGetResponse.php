<?php

namespace WlSdk\Thoth\MarketingCampaigns\Report\CampaignDetail;

/**
 * Response from GET
 */
class ClickTrackingGetResponse
{
    /**
     * Row list:
     *
     * @var ClickTrackingGetResponseRowList|null
     */
    public ?ClickTrackingGetResponseRowList $a_row_list = null;

    public function __construct(array $data)
    {
        $this->a_row_list = isset($data['a_row_list']) ? new ClickTrackingGetResponseRowList((array)$data['a_row_list']) : null;
    }
}
