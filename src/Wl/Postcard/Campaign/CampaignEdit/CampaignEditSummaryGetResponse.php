<?php

namespace WlSdk\Wl\Postcard\Campaign\CampaignEdit;

/**
 * Response from GET
 */
class CampaignEditSummaryGetResponse
{
    /**
     * Quantity of recipients.
     *
     * @var int|null
     */
    public ?int $i_quantity = null;

    /**
     * Total cost of campaign.
     *
     * @var string|null
     */
    public ?string $m_cost = null;

    public function __construct(array $data)
    {
        $this->i_quantity = isset($data['i_quantity']) ? (int)$data['i_quantity'] : null;
        $this->m_cost = isset($data['m_cost']) ? (string)$data['m_cost'] : null;
    }
}
