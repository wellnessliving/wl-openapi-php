<?php

namespace WlSdk\Wl\Promotion\Edit\Summary;

use WlSdk\WlSdkClient;

/**
 * Retrieves information about summary price depends on initial price and taxes.
 */
class Summary
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Retrieves information about summary price depends on initial price and taxes.
     *
     * @return SummaryGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(SummaryGetRequest $request): SummaryGetResponse
    {
        return new SummaryGetResponse($this->client->request('/Wl/Promotion/Edit/Summary/Summary.json', $request->params(), 'GET'));
    }
}
