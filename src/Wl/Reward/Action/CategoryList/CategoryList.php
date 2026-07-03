<?php

namespace WlSdk\Wl\Reward\Action\CategoryList;

use WlSdk\WlSdkClient;

/**
 * Retrieves all reward action categories for business specified in
 * {@link \WlSdk\Wl\Reward\Action\CategoryList\CategoryList}.
 */
class CategoryList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves all reward action categories for business specified in
{@link \WlSdk\Wl\Reward\Action\CategoryList\CategoryList}.
     *
     * Returns the list of reward action categories including category type ID, database key, and title for the
     * given business.
     *
     * @return CategoryListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CategoryListGetRequest $request): CategoryListGetResponse
    {
        return new CategoryListGetResponse($this->client->request('/Wl/Reward/Action/CategoryList/CategoryList.json', $request->params(), 'GET'));
    }
}
