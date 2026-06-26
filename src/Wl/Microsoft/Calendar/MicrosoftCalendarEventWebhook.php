<?php

namespace WlSdk\Wl\Microsoft\Calendar;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Microsoft/Calendar/MicrosoftCalendarEventWebhook.json
 */
class MicrosoftCalendarEventWebhook
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Microsoft/Calendar/MicrosoftCalendarEventWebhook.json.
     *
     * @return MicrosoftCalendarEventWebhookPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MicrosoftCalendarEventWebhookPostRequest $request): MicrosoftCalendarEventWebhookPostResponse
    {
        return new MicrosoftCalendarEventWebhookPostResponse($this->client->request('/Wl/Microsoft/Calendar/MicrosoftCalendarEventWebhook.json', $request->params(), 'POST'));
    }
}
