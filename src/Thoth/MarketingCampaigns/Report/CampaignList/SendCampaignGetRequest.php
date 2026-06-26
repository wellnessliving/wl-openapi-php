<?php

namespace WlSdk\Thoth\MarketingCampaigns\Report\CampaignList;

class SendCampaignGetRequest
{
    /**
     * The ID of the mail page, one of the {@link \WlSdk\RsMailPageSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsMailPageSid
     */
    public ?int $id_mail_page = null;

    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail_page' => $this->id_mail_page,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
