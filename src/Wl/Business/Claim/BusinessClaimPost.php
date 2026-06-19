<?php
namespace WlSdk\Wl\Business\Claim;

use WlSdk\WlSdkClient;

/**
 * Completes the verification process of the trial business.
 */
class BusinessClaimPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Completes the verification process of the trial business.
     *
     * Used by WellnessLiving staff to confirm a new trial business after reviewing the signup. Marks the
     * business as verified by the approving user. Returns the location microsite URL so the staff member
     * can share it with the new client.
     *
     * @return BusinessClaimPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(BusinessClaimPostRequest $request): BusinessClaimPostResponse
    {
        return new BusinessClaimPostResponse($this->client->request('/Wl/Business/Claim/BusinessClaim.json', $request->params(), 'POST'));
    }
}
