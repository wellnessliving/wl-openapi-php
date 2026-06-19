<?php
namespace WlSdk\Wl\Lead;

use WlSdk\WlSdkClient;

/**
 * Saves new user via "Lead capture".
 */
class LeadPost
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Saves new user via "Lead capture".
     *
     * Creates a new user account from the submitted lead capture form data, optionally signs in the new user,
     * and associates the lead with a lead source. Returns an error code in `text_sign_in_error` if sign-in was
     * requested but could not be completed.
     *
     * @return LeadPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LeadPostRequest $request): LeadPostResponse
    {
        return new LeadPostResponse($this->client->request('/Wl/Lead/Lead.json', $request->params(), 'POST'));
    }
}
