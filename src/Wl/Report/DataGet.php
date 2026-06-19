<?php
namespace WlSdk\Wl\Report;

use WlSdk\WlSdkClient;

/**
 * Gets data of required report.
 */
class DataGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets data of required report.
     *
     * Loads the specified report for the given business, applying filter, sort, and pagination parameters,
     * and returns the report rows and totals.
     *
     * @return DataGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DataGetRequest $request): DataGetResponse
    {
        return new DataGetResponse($this->client->request('/Wl/Report/Data.json', $request->params(), 'GET'));
    }
}
