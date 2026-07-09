<?php
namespace WlSdk\door-access\brivo;

use WlSdk\WlSdkClient;

/**
 * Receives a Brivo door-access event.
 */
class webhook
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
     * @return webhookPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(webhookPostRequest $request): webhookPostResponse
    {
        return new webhookPostResponse($this->client->request('/door-access/brivo/webhook', $request->params(), 'POST'));
    }
}
