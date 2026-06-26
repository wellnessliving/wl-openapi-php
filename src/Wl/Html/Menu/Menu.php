<?php

namespace WlSdk\Wl\Html\Menu;

use WlSdk\WlSdkClient;

/**
 * Checks the received data, loads the menu.
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
     * Checks the received data, loads the menu.
     *
     * @return MenuGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MenuGetRequest $request): MenuGetResponse
    {
        return new MenuGetResponse($this->client->request('/Wl/Html/Menu/Menu.json', $request->params(), 'GET'));
    }
}
