<?php

namespace WlSdk\Wl\Classes\Tab;

use WlSdk\WlSdkClient;

/**
 * Edits or creates new tab.
 */
class ClassTab
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Edits or creates new tab.
     *
     * @return ClassTabPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ClassTabPostRequest $request): ClassTabPostResponse
    {
        return new ClassTabPostResponse($this->client->request('/Wl/Classes/Tab/ClassTab.json', $request->params(), 'POST'));
    }

    /**
     * Hides the tab.
     *
     * @return ClassTabDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ClassTabDeleteRequest $request): ClassTabDeleteResponse
    {
        return new ClassTabDeleteResponse($this->client->request('/Wl/Classes/Tab/ClassTab.json', $request->params(), 'DELETE'));
    }
}
