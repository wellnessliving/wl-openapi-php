<?php
namespace WlSdk\Wl\Business\Claim;

use WlSdk\WlSdkClient;

/**
 * Checks if the email or phone number has already been used for a trial account or not.
 */
class BusinessClaim
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

    /**
     * Saves the Self-Setup wizard form data in the business claim log.
     *
     * Called at the end of the Self-Setup wizard to store the wizard input for internal auditing. Can only
     * be called once per business after it has been claimed.
     *
     * @return BusinessClaimPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(BusinessClaimPutRequest $request): BusinessClaimPutResponse
    {
        return new BusinessClaimPutResponse($this->client->request('/Wl/Business/Claim/BusinessClaim.json', $request->params(), 'PUT'));
    }
}
