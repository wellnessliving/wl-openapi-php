<?php

namespace WlSdk\Wl\Rank\Category;

use WlSdk\WlSdkClient;

/**
 * Gets belts categories list of a business.
 */
class RankCategory
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets belts categories list of a business.
     *
     * @return RankCategoryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(RankCategoryGetRequest $request): RankCategoryGetResponse
    {
        return new RankCategoryGetResponse($this->client->request('/Wl/Rank/Category/RankCategory.json', $request->params(), 'GET'));
    }
}
