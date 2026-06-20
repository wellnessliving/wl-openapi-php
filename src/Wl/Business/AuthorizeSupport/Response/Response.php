<?php

namespace WlSdk\Wl\Business\AuthorizeSupport\Response;

use WlSdk\WlSdkClient;

/**
 * Grants or denies access to business location for staff member.
 */
class Response
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Grants or denies access to business location for staff member.
     *
     * Used to respond to a support access request: a business owner accepts or rejects temporary entry for
     * a WellnessLiving support agent. Requires the Manage Business permission. Granting access triggers an
     * email notification and expires after 24 hours; the result is broadcast in real time to the requesting
     * staff member.
     *
     * @return ResponseGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ResponseGetRequest $request): ResponseGetResponse
    {
        return new ResponseGetResponse($this->client->request('/Wl/Business/AuthorizeSupport/Response/Response.json', $request->params(), 'GET'));
    }
}
