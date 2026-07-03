<?php

namespace WlSdk\Wl\DoorAccess\Brivo;

use WlSdk\WlSdkClient;

/**
 * Receives a Brivo door-access event.
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
     * Receives a Brivo door-access event.
     *
     * Authenticates the request by the per-business webhook secret, then decodes the Brivo `AUDIT` event
     *  payload and store the access fact and, when enabled, trigger an automatic check-in.
     *  Access-denied and unrecognized events are ignored.
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
