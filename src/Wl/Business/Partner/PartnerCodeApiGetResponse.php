<?php
namespace WlSdk\Wl\Business\Partner;

/**
 * Response from GET
 */
class PartnerCodeApiGetResponse
{
    /**
     * Link to the landing campaign
     *
     * @var string|null
     */
    public ?string $url_partner = null;

    public function __construct(array $data)
    {
        $this->url_partner = isset($data['url_partner']) ? (string)$data['url_partner'] : null;
    }
}
