<?php
namespace WlSdk\Wl\Reward\Board;

use WlSdk\WlSdkClient;

/**
 * Retrieves a list of reward board items to show.
 */
class ListGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves a list of reward board items to show.
     *
     * Returns an ordered list of user IDs ranked by points for the specified reward board, up to the configured
     * maximum number of entries.
     *
     * @return ListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListGetRequest $request): ListGetResponse
    {
        return new ListGetResponse($this->client->request('/Wl/Reward/Board/List.json', $request->params(), 'GET'));
    }
}
