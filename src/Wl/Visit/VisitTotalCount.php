<?php

namespace WlSdk\Wl\Visit;

use WlSdk\WlSdkClient;

/**
 * Returns the total visit count for the user at the business.
 */
class VisitTotalCount
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the total visit count for the user at the business.
     *
     * @return VisitTotalCountGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(VisitTotalCountGetRequest $request): VisitTotalCountGetResponse
    {
        return new VisitTotalCountGetResponse($this->client->request('/Wl/Visit/VisitTotalCount.json', $request->params(), 'GET'));
    }
}
