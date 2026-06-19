<?php
namespace WlSdk\Wl\Reward\Board\BoardList;

use WlSdk\WlSdkClient;

/**
 * Retrieves all reward boards for business specified in `k_business`.
 */
class List
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves all reward boards for business specified in `k_business`.
     *
     * Returns the list of reward boards available to the given user in the business, including board key and
     * title,
     * filtered to exclude boards the user is not eligible to view.
     *
     * @return ListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(ListGetRequest $request): ListGetResponse
    {
        return new ListGetResponse($this->client->request('/Wl/Reward/Board/BoardList/List.json', $request->params(), 'GET'));
    }
}
