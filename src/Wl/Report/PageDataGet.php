<?php
namespace WlSdk\Wl\Report;

use WlSdk\WlSdkClient;

/**
 * Gets data of required report collection.
 */
class PageDataGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets data of required report collection.
     *
     * Loads all reports belonging to the specified report page collection for the given business, applying shared
     * filter, sort, group, and view parameters, and returns the data for each report keyed by report ID.
     *
     * @return PageDataGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(PageDataGetRequest $request): PageDataGetResponse
    {
        return new PageDataGetResponse($this->client->request('/Wl/Report/PageData.json', $request->params(), 'GET'));
    }
}
