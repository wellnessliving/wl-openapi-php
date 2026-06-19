<?php
namespace WlSdk\Wl\Member\Progress\Log\Compare;

use WlSdk\WlSdkClient;

/**
 * Returns list of dates where client logged his progress.
 */
class CompareGet
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns list of dates where client logged his progress.
     *
     * Retrieves all distinct dates on which the given user recorded progress entries for the business, excluding
     * the most recent date (since it cannot be compared with itself). Returns an empty array when fewer than two
     * entries exist.
     *
     * @return CompareGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CompareGetRequest $request): CompareGetResponse
    {
        return new CompareGetResponse($this->client->request('/Wl/Member/Progress/Log/Compare/Compare.json', $request->params(), 'GET'));
    }
}
