<?php

namespace WlSdk\Wl\Report\Favorite;

use WlSdk\WlSdkClient;

/**
 * Returns information whether passed report controller (saved report controller) is favorite for the specified user
 *   within specified business.
 */
class ReportFavorite
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns information whether passed report controller (saved report controller) is favorite for the specified user
  within specified business.
     *
     * @return ReportFavoriteGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ReportFavoriteGetRequest $request): ReportFavoriteGetResponse
    {
        return new ReportFavoriteGetResponse($this->client->request('/Wl/Report/Favorite/ReportFavorite.json', $request->params(), 'GET'));
    }

    /**
     * Adds report controller to favorites.
     *
     * @return ReportFavoritePostResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function post(ReportFavoritePostRequest $request): ReportFavoritePostResponse
    {
        return new ReportFavoritePostResponse($this->client->request('/Wl/Report/Favorite/ReportFavorite.json', $request->params(), 'POST'));
    }

    /**
     * Removes report controller from favorites.
     *
     * @return ReportFavoriteDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(ReportFavoriteDeleteRequest $request): ReportFavoriteDeleteResponse
    {
        return new ReportFavoriteDeleteResponse($this->client->request('/Wl/Report/Favorite/ReportFavorite.json', $request->params(), 'DELETE'));
    }
}
