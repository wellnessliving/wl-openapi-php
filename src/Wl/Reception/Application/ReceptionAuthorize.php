<?php

namespace WlSdk\Wl\Reception\Application;

use WlSdk\WlSdkClient;

/**
 * Performs authorization based on the given authorization value and business settings.
 */
class ReceptionAuthorize
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Performs authorization based on the given authorization value and business settings.
     *
     * Looks up clients by member ID, email address, or phone number and returns matching user records for
     * selection
     * in the Self Check-In Web App.
     *
     * @return ReceptionAuthorizePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReceptionAuthorizePostRequest $request): ReceptionAuthorizePostResponse
    {
        return new ReceptionAuthorizePostResponse($this->client->request('/Wl/Reception/Application/ReceptionAuthorize.json', $request->params(), 'POST'));
    }
}
