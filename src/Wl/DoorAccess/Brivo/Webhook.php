<?php

namespace WlSdk\Wl\DoorAccess\Brivo;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/DoorAccess/Brivo/Webhook.json
 */
class Webhook
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/DoorAccess/Brivo/Webhook.json.
     *
     * @return WebhookPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(WebhookPostRequest $request): WebhookPostResponse
    {
        return new WebhookPostResponse($this->client->request('/Wl/DoorAccess/Brivo/Webhook.json', $request->params(), 'POST'));
    }
}
