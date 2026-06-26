<?php

namespace WlSdk\Wl\Integration\Curves;

/**
 * Response from GET
 */
class PartnerGetResponse
{
    /**
     * A partner list. Where key is key partner, value is name of the partner.
     *
     * @var array|null
     */
    public ?array $a_partner = null;

    public function __construct(array $data)
    {
        $this->a_partner = isset($data['a_partner']) ? (array)$data['a_partner'] : null;
    }
}
