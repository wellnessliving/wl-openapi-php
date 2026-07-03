<?php

namespace WlSdk\Wl\Lead;

use WlSdk\WlSdkClient;

/**
 * Checks if user with specified email already registered for specified business.
 */
class LeadCheck
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Checks if user with specified email already registered for specified business.
     *
     * Looks up an existing account by the given email address. If no account with that email exists,
     *  the user is reported as neither a member nor a lead. If an account exists, the response reports
     *  whether that user is already a member of the specified business, and whether that user is already
     *  registered as a lead for the specified business.
     *
     * @return LeadCheckPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LeadCheckPostRequest $request): LeadCheckPostResponse
    {
        return new LeadCheckPostResponse($this->client->request('/Wl/Lead/LeadCheck.json', $request->params(), 'POST'));
    }
}
