<?php

namespace WlSdk\Wl\Insurance\Profile;

use WlSdk\WlSdkClient;

/**
 * Adds promotion payment pause with default settings, thus putting membership on hold.
 */
class InsuranceHold
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Adds promotion payment pause with default settings, thus putting membership on hold.
     *
     * @return InsuranceHoldPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(InsuranceHoldPostRequest $request): InsuranceHoldPostResponse
    {
        return new InsuranceHoldPostResponse($this->client->request('/Wl/Insurance/Profile/InsuranceHold.json', $request->params(), 'POST'));
    }

    /**
     * Stops (if start date is yesterday or earlier) or removes (if start date is today) currently active promotion
payment pause.
     *
     * @return InsuranceHoldDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(InsuranceHoldDeleteRequest $request): InsuranceHoldDeleteResponse
    {
        return new InsuranceHoldDeleteResponse($this->client->request('/Wl/Insurance/Profile/InsuranceHold.json', $request->params(), 'DELETE'));
    }
}
