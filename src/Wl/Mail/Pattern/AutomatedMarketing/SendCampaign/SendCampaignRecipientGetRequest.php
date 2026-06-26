<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\SendCampaign;

class SendCampaignRecipientGetRequest
{
    /**
     * ID of the mail form. One of {@link \WlSdk\RsMailFormSid} constants.
     *
     * @var int|null
     * @see \WlSdk\RsMailFormSid
     */
    public ?int $id_mail_form = null;

    /**
     * Primary key of business in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_mail_form' => $this->id_mail_form,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
