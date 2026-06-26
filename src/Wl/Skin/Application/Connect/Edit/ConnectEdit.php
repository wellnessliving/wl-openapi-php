<?php

namespace WlSdk\Wl\Skin\Application\Connect\Edit;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Skin/Application/Connect/Edit/ConnectEdit.json
 */
class ConnectEdit
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls POST /Wl/Skin/Application/Connect/Edit/ConnectEdit.json.
     *
     * @return ConnectEditPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ConnectEditPostRequest $request): ConnectEditPostResponse
    {
        return new ConnectEditPostResponse($this->client->request('/Wl/Skin/Application/Connect/Edit/ConnectEdit.json', $request->params(), 'POST'));
    }
}
