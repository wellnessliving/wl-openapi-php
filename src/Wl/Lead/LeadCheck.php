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
     * @return LeadCheckPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(LeadCheckPostRequest $request): LeadCheckPostResponse
    {
        return new LeadCheckPostResponse($this->client->request('/Wl/Lead/LeadCheck.json', $request->params(), 'POST'));
    }
}
