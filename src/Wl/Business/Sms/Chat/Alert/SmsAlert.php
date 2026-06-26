<?php

namespace WlSdk\Wl\Business\Sms\Chat\Alert;

use WlSdk\WlSdkClient;

/**
 * Marks alerts for this client's messages as read, saves alert count.
 * If the alert key was read, it sets the alert to hidden.
 */
class SmsAlert
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Marks alerts for this client's messages as read, saves alert count.
If the alert key was read, it sets the alert to hidden.
     *
     * @return SmsAlertPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(SmsAlertPostRequest $request): SmsAlertPostResponse
    {
        return new SmsAlertPostResponse($this->client->request('/Wl/Business/Sms/Chat/Alert/SmsAlert.json', $request->params(), 'POST'));
    }
}
