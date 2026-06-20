<?php

namespace WlSdk\Wl\Collector;

use WlSdk\WlSdkClient;

/**
 * Returns a list of client debts for the specified business within the given date range.
 */
class DebtList
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Returns a list of client debts for the specified business within the given date range.
     *
     * Used by the Collections module to display outstanding debts to the collector. Requires an active
     * Collections subscription and either the business privilege or emulation access. The default date range
     * covers the previous month relative to the business timezone.
     *
     * @return DebtListGetResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function get(DebtListGetRequest $request): DebtListGetResponse
    {
        return new DebtListGetResponse($this->client->request('/Wl/Collector/DebtList.json', $request->params(), 'GET'));
    }
}
