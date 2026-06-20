<?php
namespace WlSdk\Wl\Rank;

use WlSdk\WlSdkClient;

/**
 * Gets belts list of a business.
 */
class Rank
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets belts list of a business.
     *
     * Returns all belts for the specified business, optionally filtered by belt category keys, including each
     * belt's
     * title and its parent category title.
     *
     * @return RankGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RankGetRequest $request): RankGetResponse
    {
        return new RankGetResponse($this->client->request('/Wl/Rank/Rank.json', $request->params(), 'GET'));
    }
}
