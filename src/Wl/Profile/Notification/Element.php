<?php

namespace WlSdk\Wl\Profile\Notification;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about push notification item.
 */
class Element
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about push notification item.
     *
     * @return ElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ElementGetRequest $request): ElementGetResponse
    {
        return new ElementGetResponse($this->client->request('/Wl/Profile/Notification/Element.json', $request->params(), 'GET'));
    }
}
