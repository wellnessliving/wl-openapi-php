<?php

namespace WlSdk\Wl\Search\Template\Panel;

use WlSdk\WlSdkClient;

/**
 * Gets panel template data.
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
     * Gets panel template data.
     *
     * @return PanelGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PanelGetRequest $request): PanelGetResponse
    {
        return new PanelGetResponse($this->client->request('/Wl/Search/Template/Panel/Panel.json', $request->params(), 'GET'));
    }

    /**
     * Creates new search template.
     *
     * @return PanelPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PanelPostRequest $request): PanelPostResponse
    {
        return new PanelPostResponse($this->client->request('/Wl/Search/Template/Panel/Panel.json', $request->params(), 'POST'));
    }

    /**
     * Updates search template.
     *
     * @return PanelPutResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function put(PanelPutRequest $request): PanelPutResponse
    {
        return new PanelPutResponse($this->client->request('/Wl/Search/Template/Panel/Panel.json', $request->params(), 'PUT'));
    }
}
