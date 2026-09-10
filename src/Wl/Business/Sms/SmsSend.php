<?php

namespace WlSdk\Wl\Business\Sms;

use WlSdk\WlSdkClient;

/**
 * Sends an SMS message from the business virtual phone number to a client.
 */
class SmsSend
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Sends an SMS message from the business virtual phone number to a client.
     *
     * Applies smart-encoding replacements to the message body, shortens links so the client
     *  receives a short link instead of the raw URL, and queues the actual sending through an
     *  asynchronous task. Returns the shortened message body so the staff interface can show
     *  exactly what the client will receive.
     *
     * @return SmsSendPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsSendPostRequest $request): SmsSendPostResponse
    {
        return new SmsSendPostResponse($this->client->request('/Wl/Business/Sms/SmsSend.json', $request->params(), 'POST'));
    }
}
