<?php
namespace WlSdk\Wl\Business\Partner;

use WlSdk\WlSdkClient;

/**
 * Returns the partner URL for the specified business.
 */
class PartnerCodeGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the partner URL for the specified business.
     *
     * Used to display or share the business's unique Partner Program landing page link. Partner URLs are
     * public information, so no access check is performed.
     *
     * @return PartnerCodeGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PartnerCodeGetRequest $request): PartnerCodeGetResponse
    {
        return new PartnerCodeGetResponse($this->client->request('/Wl/Business/Partner/PartnerCode.json', $request->params(), 'GET'));
    }
}
