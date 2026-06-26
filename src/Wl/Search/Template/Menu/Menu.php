<?php

namespace WlSdk\Wl\Search\Template\Menu;

use WlSdk\WlSdkClient;

/**
 * Gets list of saved search templates.
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
     * Gets list of saved search templates.
     *
     * @return MenuGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(MenuGetRequest $request): MenuGetResponse
    {
        return new MenuGetResponse($this->client->request('/Wl/Search/Template/Menu/Menu.json', $request->params(), 'GET'));
    }

    /**
     * Saves search template as default.
     *
     * @return MenuPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(MenuPostRequest $request): MenuPostResponse
    {
        return new MenuPostResponse($this->client->request('/Wl/Search/Template/Menu/Menu.json', $request->params(), 'POST'));
    }

    /**
     * Removes search template.
     *
     * @return MenuDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(MenuDeleteRequest $request): MenuDeleteResponse
    {
        return new MenuDeleteResponse($this->client->request('/Wl/Search/Template/Menu/Menu.json', $request->params(), 'DELETE'));
    }
}
