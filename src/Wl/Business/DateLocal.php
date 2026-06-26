<?php

namespace WlSdk\Wl\Business;

use WlSdk\WlSdkClient;

/**
 * Gets information about a business.
 */
class DateLocal
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets information about a business.
     *
     * @return DateLocalGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DateLocalGetRequest $request): DateLocalGetResponse
    {
        return new DateLocalGetResponse($this->client->request('/Wl/Business/DateLocal.json', $request->params(), 'GET'));
    }
}
