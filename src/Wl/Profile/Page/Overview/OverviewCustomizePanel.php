<?php

namespace WlSdk\Wl\Profile\Page\Overview;

use WlSdk\WlSdkClient;

/**
 * Retrieves settings for client's profile overview widgets and summary cards to display in Customize panel.
 */
class OverviewCustomizePanel
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves settings for client's profile overview widgets and summary cards to display in Customize panel.
     *
     * @return OverviewCustomizePanelGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(OverviewCustomizePanelGetRequest $request): OverviewCustomizePanelGetResponse
    {
        return new OverviewCustomizePanelGetResponse($this->client->request('/Wl/Profile/Page/Overview/OverviewCustomizePanel.json', $request->params(), 'GET'));
    }

    /**
     * Saves settings for client's profile overview widgets and summary cards.
     *
     * @return OverviewCustomizePanelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(OverviewCustomizePanelPostRequest $request): OverviewCustomizePanelPostResponse
    {
        return new OverviewCustomizePanelPostResponse($this->client->request('/Wl/Profile/Page/Overview/OverviewCustomizePanel.json', $request->params(), 'POST'));
    }
}
