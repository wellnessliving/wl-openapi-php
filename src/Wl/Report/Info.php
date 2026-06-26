<?php

namespace WlSdk\Wl\Report;

use WlSdk\WlSdkClient;

/**
 * Gets report type data.
 */
class Info
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets report type data.
     *
     * @return InfoGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(InfoGetRequest $request): InfoGetResponse
    {
        return new InfoGetResponse($this->client->request('/Wl/Report/Info.json', $request->params(), 'GET'));
    }
}
