<?php

namespace WlSdk\Wl\Service\Edit;

use WlSdk\WlSdkClient;

/**
 * Prepares notification pattern data of custom confirmation/reminder notification.
 */
class NotificationCustomization
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Prepares notification pattern data of custom confirmation/reminder notification.
     *
     * @return NotificationCustomizationGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(NotificationCustomizationGetRequest $request): NotificationCustomizationGetResponse
    {
        return new NotificationCustomizationGetResponse($this->client->request('/Wl/Service/Edit/NotificationCustomization.json', $request->params(), 'GET'));
    }

    /**
     * Save a new confirmation/notification mail pattern.
     *
     * @return NotificationCustomizationPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(NotificationCustomizationPostRequest $request): NotificationCustomizationPostResponse
    {
        return new NotificationCustomizationPostResponse($this->client->request('/Wl/Service/Edit/NotificationCustomization.json', $request->params(), 'POST'));
    }

    /**
     * Updates an existing confirmation/notification mail pattern.
     *
     * @return NotificationCustomizationPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(NotificationCustomizationPutRequest $request): NotificationCustomizationPutResponse
    {
        return new NotificationCustomizationPutResponse($this->client->request('/Wl/Service/Edit/NotificationCustomization.json', $request->params(), 'PUT'));
    }
}
