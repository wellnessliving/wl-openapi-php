<?php

namespace WlSdk\Wl\Skin;

use WlSdk\WlSdkClient;

/**
 * Gets list of Lead Widgets.
 */
class WidgetLeadSkin
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets list of Lead Widgets.
     *
     * @return WidgetLeadSkinGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(WidgetLeadSkinGetRequest $request): WidgetLeadSkinGetResponse
    {
        return new WidgetLeadSkinGetResponse($this->client->request('/Wl/Skin/WidgetLeadSkin.json', $request->params(), 'GET'));
    }
}
