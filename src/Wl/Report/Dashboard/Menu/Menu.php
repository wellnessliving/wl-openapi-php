<?php

namespace WlSdk\Wl\Report\Dashboard\Menu;

use WlSdk\WlSdkClient;

/**
 * Gets available dashboard for specified user within specified business.
 */
class Menu
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets available dashboard for specified user within specified business.
     *
     * @return MenuGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MenuGetRequest $request): MenuGetResponse
    {
        return new MenuGetResponse($this->client->request('/Wl/Report/Dashboard/Menu/Menu.json', $request->params(), 'GET'));
    }

    /**
     * Updates dashboard sort order selected by user.
     *
     * @return MenuPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(MenuPutRequest $request): MenuPutResponse
    {
        return new MenuPutResponse($this->client->request('/Wl/Report/Dashboard/Menu/Menu.json', $request->params(), 'PUT'));
    }
}
