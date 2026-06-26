<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\SendCampaign;

/**
 * Response from GET
 */
class SendCampaignRecipientGetResponse
{
    /**
     * UID's of recipients.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    public function __construct(array $data)
    {
        $this->a_uid = isset($data['a_uid']) ? (array)$data['a_uid'] : null;
    }
}
