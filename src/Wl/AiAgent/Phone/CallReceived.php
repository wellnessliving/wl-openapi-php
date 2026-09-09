<?php

namespace WlSdk\Wl\AiAgent\Phone;

use WlSdk\WlSdkClient;

/**
 * Sends the "Phone Agent Call Received" staff notification to every active staff member of the business who
 * has the {@link \WlSdk\Wl\Privilege\PrivilegeSid} permission.
 */
class CallReceived
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends the "Phone Agent Call Received" staff notification to every active staff member of the business who
has the {@link \WlSdk\Wl\Privilege\PrivilegeSid} permission.
     *
     * Requires the business to have an active Phone Agent subscription tier.
     *
     * @return CallReceivedPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(CallReceivedPostRequest $request): CallReceivedPostResponse
    {
        return new CallReceivedPostResponse($this->client->request('/Wl/AiAgent/Phone/CallReceived.json', $request->params(), 'POST'));
    }
}
