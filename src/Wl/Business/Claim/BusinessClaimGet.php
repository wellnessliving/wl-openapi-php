<?php
namespace WlSdk\Wl\Business\Claim;

use WlSdk\WlSdkClient;

/**
 * Checks if the email or phone number has already been used for a trial account or not.
 */
class BusinessClaimGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if the email or phone number has already been used for a trial account or not.
     *
     * Called during the self-onboarding flow before creating a new business to detect duplicate registrations
     * early. Checks across all data center regions. Rate-limited per IP to prevent abuse.
     *
     * @return BusinessClaimGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(BusinessClaimGetRequest $request): BusinessClaimGetResponse
    {
        return new BusinessClaimGetResponse($this->client->request('/Wl/Business/Claim/BusinessClaim.json', $request->params(), 'GET'));
    }
}
