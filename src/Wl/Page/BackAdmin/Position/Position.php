<?php

namespace WlSdk\Wl\Page\BackAdmin\Position;

use WlSdk\WlSdkClient;

/**
 * Returns position of back admin container.
 */
class Position
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns position of back admin container.
     *
     * @return PositionGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PositionGetRequest $request): PositionGetResponse
    {
        return new PositionGetResponse($this->client->request('/Wl/Page/BackAdmin/Position/Position.json', $request->params(), 'GET'));
    }

    /**
     * Stores position of back admin container in the session.
     *
     * @return PositionPostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(PositionPostRequest $request): PositionPostResponse
    {
        return new PositionPostResponse($this->client->request('/Wl/Page/BackAdmin/Position/Position.json', $request->params(), 'POST'));
    }
}
