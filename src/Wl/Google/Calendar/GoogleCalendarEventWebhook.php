<?php

namespace WlSdk\Wl\Google\Calendar;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Google/Calendar/GoogleCalendarEventWebhook.json
 */
class GoogleCalendarEventWebhook
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Google/Calendar/GoogleCalendarEventWebhook.json.
     *
     * @return GoogleCalendarEventWebhookPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(GoogleCalendarEventWebhookPostRequest $request): GoogleCalendarEventWebhookPostResponse
    {
        return new GoogleCalendarEventWebhookPostResponse($this->client->request('/Wl/Google/Calendar/GoogleCalendarEventWebhook.json', $request->params(), 'POST'));
    }
}
