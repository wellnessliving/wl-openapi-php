<?php

namespace WlSdk\Wl\Presence;

use WlSdk\WlSdkClient;

/**
 * This method is called to process POST query.
 */
class PresenceActivate
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * This method is called to process POST query.
     *
     * @return PresenceActivatePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PresenceActivatePostRequest $request): PresenceActivatePostResponse
    {
        return new PresenceActivatePostResponse($this->client->request('/Wl/Presence/PresenceActivate.json', $request->params(), 'POST'));
    }
}
