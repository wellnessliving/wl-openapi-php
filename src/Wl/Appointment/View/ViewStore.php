<?php

namespace WlSdk\Wl\Appointment\View;

use WlSdk\WlSdkClient;

/**
 * Loads information about amounts that must be paid for an appointment.
 */
class ViewStore
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Loads information about amounts that must be paid for an appointment.
     *
     * @return ViewStoreGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ViewStoreGetRequest $request): ViewStoreGetResponse
    {
        return new ViewStoreGetResponse($this->client->request('/Wl/Appointment/View/ViewStore.json', $request->params(), 'GET'));
    }
}
