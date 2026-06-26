<?php

namespace WlSdk\Wl\Help\Popup;

use WlSdk\WlSdkClient;

/**
 * Gets help popup settings.
 */
class Popup
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets help popup settings.
     *
     * @return PopupGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PopupGetRequest $request): PopupGetResponse
    {
        return new PopupGetResponse($this->client->request('/Wl/Help/Popup/Popup.json', $request->params(), 'GET'));
    }
}
