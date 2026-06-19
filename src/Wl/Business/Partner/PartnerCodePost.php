<?php
namespace WlSdk\Wl\Business\Partner;

use WlSdk\WlSdkClient;

/**
 * Updates partner url for a business that takes part in the partner program.
 */
class PartnerCodePost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
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
