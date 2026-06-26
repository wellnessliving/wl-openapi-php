<?php

namespace WlSdk\Wl\Login\Promotion\Cancel;

use WlSdk\WlSdkClient;

/**
 * Prepares notification pattern data of cancelled promotion.
 */
class NotificationPattern
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Prepares notification pattern data of cancelled promotion.
     *
     * @return NotificationPatternGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(NotificationPatternGetRequest $request): NotificationPatternGetResponse
    {
        return new NotificationPatternGetResponse($this->client->request('/Wl/Login/Promotion/Cancel/NotificationPattern.json', $request->params(), 'GET'));
    }
}
