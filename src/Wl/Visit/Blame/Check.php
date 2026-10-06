<?php

namespace WlSdk\Wl\Visit\Blame;

use WlSdk\WlSdkClient;

/**
 * Gets visit status.
 */
class Check
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Gets visit status.
     *
     * Checks the specified visit against the business late cancellation and no show rules,
     *  returning the fee amount that would be charged, whether the visit is blamed, and whether
     *  a confirmation modal must be shown before charging the fee.
     *
     * @return CheckGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(CheckGetRequest $request): CheckGetResponse
    {
        return new CheckGetResponse($this->client->request('/Wl/Visit/Blame/Check.json', $request->params(), 'GET'));
    }
}
