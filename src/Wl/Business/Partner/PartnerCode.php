<?php
namespace WlSdk\Wl\Business\Partner;

use WlSdk\WlSdkClient;

/**
 * Returns the partner URL for the specified business.
 */
class PartnerCode
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

    /**
     * Updates partner url for a business that takes part in the partner program.
     *
     * Allows a Partner Program member to set a memorable custom vanity code for their referral landing page.
     * The code must be unique across all businesses and contain only letters, digits, and underscores.
     *
     * @return PartnerCodePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PartnerCodePostRequest $request): PartnerCodePostResponse
    {
        return new PartnerCodePostResponse($this->client->request('/Wl/Business/Partner/PartnerCode.json', $request->params(), 'POST'));
    }
}
