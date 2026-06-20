<?php

namespace WlSdk\Wl\Reward\Board;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about reward board item.
 */
class Element
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about reward board item.
     *
     * In single-user mode returns the user's score, name, and avatar on the specified board; in multi-user mode
     * accepts a list of UIDs and returns an array of score, name, and avatar entries for all of them.
     *
     * @return ElementGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ElementGetRequest $request): ElementGetResponse
    {
        return new ElementGetResponse($this->client->request('/Wl/Reward/Board/Element.json', $request->params(), 'GET'));
    }
}
