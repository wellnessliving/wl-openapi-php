<?php

namespace WlSdk\Wl\Book\Repeat\Panel;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Book/Repeat/Panel/Panel.json
 */
class Panel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls GET /Wl/Book/Repeat/Panel/Panel.json.
     *
     * @return PanelGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PanelGetRequest $request): PanelGetResponse
    {
        return new PanelGetResponse($this->client->request('/Wl/Book/Repeat/Panel/Panel.json', $request->params(), 'GET'));
    }
}
